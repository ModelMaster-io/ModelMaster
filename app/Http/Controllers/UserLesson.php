<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\TempSaveLesson;
use App\Lesson;
use App\LessonSteps;
use App\LessonStepHints;

class UserLesson extends Controller
{

    //Constructor
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function saveTempUserLesson(TempSaveLesson $temp_lesson, Request $request, LessonSteps $lessonsteps)
    {

        //dd(serialize($request->get('lesson')));

        $lesson_id = $request->get('lesson_id');
        $section = $request->get('screen');
        $step = $request->get('step');
        $curr_lesson = $request->get('lesson');
        $is_backward_step = $request->get('is_backward_step');

        $lesson_steps = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $section, 'step' => $step])->first();

        $row_col = array();
        $right_rc = array();

        $dss = '';
        $prev_lsn = '';

        $next_step = $this->getNextLessonStep($lesson_id, $section, $step);

        if ($next_step != 1) {

            $dss = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $next_step['section'], 'step' => $next_step['step']])->pluck('direct_starting_screen')->first();
        }

        $sfpui = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $next_step['section'], 'step' => $next_step['step']])->pluck('starts_from_previous_user_input')->first();

        if ($sfpui == 1) {
            $prev_sc_stp = LessonSteps::select('previous_section', 'previous_step')->where(['lesson_id' => $lesson_id, 'section' => $next_step['section'], 'step' => $next_step['step']])->first();

            $prev_lsn = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $prev_sc_stp['previous_section'], 'step' => $prev_sc_stp['previous_step']])->pluck('answer')->first();
        }


        if ($lesson_steps) {

            $answer = isset($lesson_steps->answer) ? json_decode($lesson_steps->answer) : array();

            if ($answer) {

                $sheet = reset($answer->sheets);


                $answer_datatable = isset($sheet) ? $sheet->data->dataTable : $answer->sheets->data->dataTable;


                if ($curr_lesson) {

                    $curr_answer = json_decode($curr_lesson);
                    $sheet = reset($curr_answer->sheets);
                    $curr_answer_datatable = isset($sheet->data->dataTable) ? $sheet->data->dataTable : '';


                    $row = array();
                    $col = array();
                    $epsilon = 0.0001;
                    foreach ($answer_datatable as $key => $value) {

                        foreach ($value as $sub_key => $sub_value) {

                            if (isset($sub_value->value)) {

                                if (!isset($curr_answer_datatable->$key) || !isset($curr_answer_datatable->$key->$sub_key) || !isset($curr_answer_datatable->$key->$sub_key->value) || abs((float)str_replace("\n", "", $sub_value->value) - (float)str_replace("\n", "", $curr_answer_datatable->$key->$sub_key->value)) > $epsilon) {

                                    $row = (int) $key;
                                    $col = (int) $sub_key;

                                    $row_col[] = array($row => $col);
                                } else {

                                    $rgt_row = (int) $key;
                                    $rgt_col = (int) $sub_key;
                                    $right_rc[] = array($rgt_row => $rgt_col);
                                }
                            }
                        }
                    }


                    if (!empty($row_col)) {
                        return response()->json(['status' => 0,  'error_msg' => $lesson_steps->error_message, 'wrong_cells' => json_encode($row_col), 'right_cells' => json_encode($right_rc)]);
                    }
                } else {
                    return response()->json(['status' => 0,  'error_msg' => $lesson_steps->error_message]);
                }
            }
        }



        $user_id = Auth::user()->id;

        // if ($is_backward_step == 1) {

        //     //Code for existing database lesson
        //     $same_existing_lesson = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $section, 'step' => $step])->pluck('lesson')->first();

        //     $same_existing_lesson = json_decode(unserialize($same_existing_lesson));

        //     $same_existing_lesson = isset($same_existing_lesson->sheets->$sheet->data->dataTable) ? $same_existing_lesson->sheets->$sheet->data->dataTable : '';

        //     $same_existing_lesson = json_encode($same_existing_lesson);


        //     //Code for current submitted lesson
        //     $curr_lesson = json_decode($curr_lesson);

        //     $curr_lesson = isset($curr_lesson->sheets->$sheet->data->dataTable) ? $curr_lesson->sheets->$sheet->data->dataTable : '';

        //     $curr_lesson = json_encode($curr_lesson);

        //     //Compare both json value
        //     if ($curr_lesson == $same_existing_lesson) {

        //         return response()->json(['status' => 3,  'success' => 'Spreadsheet data fetch successfully', 'right_cells' => json_encode($right_rc), 'dss' => $dss, 'prev_lsn' => $prev_lsn]);
        //     } else {

        //         //Code for delete next steps when user made any change in backward step
        //         $max_scrn = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id])->max('screen');

        //         for ($m = $section; $m <= $max_scrn; $m++) {

        //             $ttl_stp = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $m])->max('step');

        //             $stp = $step;

        //             if ($m > $section) {
        //                 $stp = 1;
        //             }

        //             for ($s = $stp; $s <= $ttl_stp; $s++) {
        //                 $res = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $m, 'step' => $s])->delete();
        //             }
        //         }
        //     }
        // }

        // else {

        /* If above all validations are true then execute below part */

        $new_empty_lesson = Lesson::where(['id' => $lesson_id])->pluck('lesson')->first();

        if (TempSaveLesson::where(['user_id' => $user_id, 'lesson_id' => $lesson_id])->exists()) {

            $latest_screen = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id])->max('screen');

            $latest_step = TempSaveLesson::where(['lesson_id' => $lesson_id, 'screen' => $latest_screen, 'user_id' => $user_id])->max('step');

            $existing_lesson = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $latest_screen, 'step' => $latest_step])->pluck('lesson')->first();

            $lesson = $curr_lesson;
        } else {
            $lesson = $curr_lesson;
        }


        /*if($existing_lesson != ''){
            $lesson = $existing_lesson;
        } else {
            $lesson = $new_empty_lesson;
        }*/


        if ($lesson != '') {
            $lesson = json_decode($lesson, true);

            $c_lesson = $request->get('lesson');

            if ($c_lesson != '') {

                $c_lesson = json_decode($c_lesson, true);

                for ($l = 1; $l <= count($c_lesson['sheets']); $l++) {

                    if (!empty($c_lesson['sheets']['Sheet' . $l]['data']['dataTable'])) {
                        $lesson['sheets']['Sheet' . $l]['data']['dataTable'] = $c_lesson['sheets']['Sheet' . $l]['data']['dataTable'];
                    }
                }
            }
        }

        $temp_lesson_save = TempSaveLesson::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'lesson_id' => $request->get('lesson_id'),
                'screen' => $request->get('screen'),
                'step' => $request->get('step'),
            ],
            ['lesson' => serialize(json_encode($lesson))]
        );


        $max_screen = LessonSteps::where('lesson_id', $request->get('lesson_id'))->max('section');

        $max_step = LessonSteps::where(['lesson_id' => $request->get('lesson_id'), 'section' => $max_screen])->max('step');



        if ($max_screen == $temp_lesson_save['screen'] && $max_step == $temp_lesson_save['step']) {

            return response()->json(['status' => 2,  'success' => 'Your curent Lesson is Completed!', 'right_cells' => json_encode($right_rc), 'dss' => $dss, 'prev_lsn' => $prev_lsn]);
        } else {

            return response()->json(['status' => 1,  'success' => 'Lesson Save Successfully!', 'right_cells' => json_encode($right_rc), 'dss' => $dss, 'prev_lsn' => $prev_lsn]);
        }


        // }


    }


    public function getUserPrevLessonStep(TempSaveLesson $temp_lesson, Request $request)
    {

        $user_id = Auth::user()->id;
        $lesson_id = $request->get('lesson_id');
        $screen = $request->get('screen');
        $step = $request->get('step');

        $prvstp = $this->getPrevLessonStep($lesson_id, $screen, $step);

        $prev_lesson = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $prvstp['section'], 'step' => $prvstp['step']])->pluck('lesson')->first();

        if ($prev_lesson != null) {
            return response()->json(['status' => 1, 'prevSpreadsheetData' => unserialize($prev_lesson)]);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something goes wrong!']);
        }
    }


    public function getTempUserLesson(TempSaveLesson $temp_lesson, Request $request)
    {

        $user_id = Auth::user()->id;
        $lesson_id = $request->get('lesson_id');

        //$l_id = TempSaveLesson::where(['user_id' => $user_id, 'lesson_id' => $lesson_id])->orderBy('created_at', 'desc')->pluck('lesson_id')->first();

        if (TempSaveLesson::where(['user_id' => $user_id, 'lesson_id' => $lesson_id])->exists()) {

            $latest_screen = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id])->max('screen');

            $latest_step = TempSaveLesson::where(['lesson_id' => $lesson_id, 'screen' => $latest_screen, 'user_id' => $user_id])->max('step');

            $lesson = TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id, 'screen' => $latest_screen, 'step' => $latest_step])->get()->first();

            $temo_lsn_data = $lesson->getOriginal();

            $step = isset($temo_lsn_data['step']) ? $temo_lsn_data['step'] : '';
            $screen = isset($temo_lsn_data['screen']) ? $temo_lsn_data['screen'] : '';
            $spreadsheetData = isset($temo_lsn_data['lesson']) ? unserialize($temo_lsn_data['lesson']) : array();

            return response()->json(['status' => 1,  'spreadsheetData' => $spreadsheetData, 'screen' => $screen, 'step' => $step]);
        } else {

            return response()->json(['status' => 0,  'msg' => 'No any spreadsheet running...']);
        }
    }

    public function getNextLessonStep($lesson_id, $section, $step)
    {

        $max_step = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $section])->max('step');

        $max_screen = LessonSteps::where('lesson_id', $lesson_id)->max('section');

        if ($step < $max_step) {
            return array('section' => $section, 'step' => ($step + 1));
        } else if (($step == $max_step) && ($section < $max_screen)) {
            return array('section' => ($section + 1), 'step' => 1);
        } else if (($step == $max_step) && ($section == $max_screen)) {
            return 1;
        } else {
            return 1;
        }
    }


    public function getPrevLessonStep($lesson_id, $section, $step)
    {

        if ($step > 1) {
            $step = $step - 1;
        } else if ($section > 1 && $step == 1) {
            $section = $section - 1;
            $step = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $section])->max('step');
        }

        return array('section' => $section, 'step' => $step);
    }


    public function getLessonSteps(Request $request)
    {

        $lesson_id = $request->get('lesson_id');

        $lesson_sections = LessonSteps::select('section', 'title')->distinct()->where('lesson_id', $lesson_id)->orderBy('section', 'ASC')->get();

        $instructions_html = "";

        if ($lesson_sections) {

            $lesson_steps = array();

            foreach ($lesson_sections as $instructions) {
                # code...

                if ($instructions->section == 1) {
                    $dsply = 'block';
                } else {
                    $dsply = 'none';
                }

                $instructions_html .= '<div class="lcltc1" id="step' . $instructions->section . '" style="display:' . $dsply . '">';
                $instructions_html .= '<span class="lcltc1-title">' . $instructions->title . '</span>
                <div class="lcltc1-contant">
                <div class="lcltc1-mm">';

                $lesson_steps = LessonSteps::select('step', 'instructions', 'has_automatic_values')->where(['lesson_id' => $lesson_id, 'section' => $instructions->section])->orderBy('step', 'ASC')->get();

                if ($lesson_steps) {

                    $bottom_step_bullet = "";

                    $bottom_step_bullet .= '<div class="sub-lesson-contant-left-tab-menu">
                    <span class="previous_btn">&laquo</span>
                    <ul class="sub-esson-menu spread_sub_steps_clk">';

                    foreach ($lesson_steps as $stps) {

                        $hints = array();

                        $l_step_id = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $instructions->section, 'step' => $stps->step])->pluck('id')->first();

                        if (LessonStepHints::where('lesson_steps_id', '=', $l_step_id)->exists()) {
                            $hints = LessonStepHints::select('hint')->where('lesson_steps_id', $l_step_id)->get();
                            //$hints = $hints->getOriginal();
                        }


                        if ($stps->step == 1) {
                            $dslp = 'block';
                        } else {
                            $dslp = 'none';
                        }

                        $instructions_html .= '<div class="sub-lesson-step-contant" id="sub' . $instructions->section . '-step' . $stps->step . '" style="display:' . $dslp . '">';

                        if ($stps->has_automatic_values == 1) {

                            $instructions_html .= '<p><button class="add-historical-values">Input historical Values</button></p>';
                        }

                        $instructions_html .= $stps->instructions;

                        if (!empty($hints)) {

                            $h = 1;

                            foreach ($hints as $hint) {

                                $instructions_html .= '<p><span class="mm-tooltip" title="' . $hint['hint'] . '"><strong>Hint ' . $h . '</strong></span></p>';

                                $h++;
                            }
                        }


                        $instructions_html .= '</div>';

                        if ($stps->step == 1) {
                            $dslp = 'class="active"';
                        } else {
                            $dslp = '';
                        }

                        $bottom_step_bullet .= '<li><a href="javascript:void(0)" ' . $dslp . ' data-step="sub' . $instructions->section . '-step' . $stps->step . '">' . $stps->step . '</a></li>';
                    }


                    $bottom_step_bullet .= '</ul>
                        <span class="next_btn">&raquo</span>
                    </div>';
                }

                $instructions_html .= '</div>';

                $instructions_html .=  $bottom_step_bullet;

                $instructions_html .= '</div>';

                $instructions_html .= '</div>';
            }
        }

        return response()->json(['status' => 1,  'stepsHtml' => $instructions_html]);
    }


    public function getHistoricalData(Request $request)
    {

        $lesson_id = ($request->get('lesson_id') != null) ? $request->get('lesson_id') : '';

        $screen = ($request->get('screen') != null) ? $request->get('screen') : '';

        $step = ($request->get('step') != null) ? $request->get('step') : '';

        $hData = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $screen, 'step' => $step])->pluck('automatic_values')->first();

        if ($hData) {
            return response()->json(['status' => 1,  'hData' => $hData]);
        }

        return response()->json(['status' => 0, 'msg' => 'Historical data not found!']);
    }


    public function getLessonListing(Request $request)
    {

        $lessonlist = Lesson::select('id', 'name')->get();

        return view("pages.lesson", compact('lessonlist'));
    }
}
