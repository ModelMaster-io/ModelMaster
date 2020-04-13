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
    public function __construct(){
         //$this->middleware('auth');
    }


    public function saveTempUserLesson(TempSaveLesson $temp_lesson, Request $request, LessonSteps $lessonsteps) {

        //dd(serialize($request->get('lesson')));

        $lesson_id = $request->get('lesson_id');
        $section = $request->get('screen');
        $step = $request->get('step');
        $curr_lesson = $request->get('lesson');

        $lesson_steps = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $section, 'step' => $step])->first();

        $row_col = array();
        $right_rc = array();


        if($lesson_steps){

            $answer = isset($lesson_steps->answer) ? json_decode($lesson_steps->answer) : array();

            /*echo '<pre>';
            print_r($answer);
            exit();*/

            $answer_datatable = isset($answer->sheets->Sheet1) ? $answer->sheets->Sheet1->data->dataTable : $answer->sheets->data->dataTable;


            if($curr_lesson){

                $curr_answer = json_decode($curr_lesson); 
                $curr_answer_datatable = isset($curr_answer->sheets->Sheet1->data->dataTable) ? $curr_answer->sheets->Sheet1->data->dataTable : '';

                $row = array();
                $col = array();
                foreach ($answer_datatable as $key => $value) {

                    foreach ($value as $sub_key => $sub_value) {

                        if(isset($sub_value->value)){

                            if(!isset($curr_answer_datatable->$key) || !isset($curr_answer_datatable->$key->$sub_key) || !isset($curr_answer_datatable->$key->$sub_key->value) || (str_replace("\n","",$sub_value->value) != str_replace("\n","",$curr_answer_datatable->$key->$sub_key->value))){

                                $row = (int)$key;
                                $col = (int)$sub_key;

                                $row_col[] = array($row=>$col);
                                //return response()->json(['status'=>0,  'error_msg'=>$lesson_steps->error_message, 'row'=>$row, 'col'=>$col]);
    
                            } else {

                                $rgt_row = (int)$key;
                                $rgt_col = (int)$sub_key;
                                $right_rc[] = array($rgt_row=>$rgt_col);

                            }

                        }

                    }
                    

                }

                /*echo '<pre>';
                print_r(json_encode($row_col));
                exit(); */

                if(!empty($row_col)){

                    return response()->json(['status'=>0,  'error_msg'=>$lesson_steps->error_message, 'wrong_cells'=>json_encode($row_col), 'right_cells'=>json_encode($right_rc)]);

                }

                



            } else {
                return response()->json(['status'=>0,  'error_msg'=>$lesson_steps->error_message]);
            }


        }


        /* If above all validations are true then execute below part */
        
        $user_id = Auth::user()->id;

        $new_empty_lesson = Lesson::where(['id' => 1])->pluck('lesson')->first();

        $existing_lesson = TempSaveLesson::where(['lesson_id' => 1, 'user_id' => $user_id])->pluck('lesson')->first();

        if($existing_lesson != ''){
            $lesson = $existing_lesson;
        } else {
            $lesson = $new_empty_lesson;
        }


        if($lesson != ''){
            $lesson = unserialize($lesson);
            $lesson = json_decode($lesson, true);

            $c_lesson = $request->get('lesson');
            
            if($c_lesson != ''){

                $c_lesson = json_decode($c_lesson, true);

                //echo '<pre>';
                //print_r($c_lesson);

                for ($l=1; $l <= count($c_lesson['sheets']); $l++) {

                    if(!empty($c_lesson['sheets']['Sheet'.$l]['data']['dataTable'])){
                        $lesson['sheets']['Sheet'.$l]['data']['dataTable'] = $c_lesson['sheets']['Sheet'.$l]['data']['dataTable'];
                    }

                }

            }

            
        }


        $temp_lesson_save = TempSaveLesson::updateOrCreate(
            ['user_id' => Auth::user()->id, 'lesson_id' => $request->get('lesson_id')],
            ['screen' => $request->get('screen'), 'step' => $request->get('step'), 'lesson' => serialize(json_encode($lesson))]
        );

        return response()->json(['status'=>1,  'success'=>'Lesson Save Successfully!', 'right_cells'=>json_encode($right_rc)]);

    }


    public function getTempUserLesson(TempSaveLesson $temp_lesson, Request $request) {

        $user_id = Auth::user()->id;

        $l_id = TempSaveLesson::where(['user_id' => $user_id])->orderBy('created_at', 'desc')->pluck('lesson_id')->first();

        if($l_id != null){

            $lesson = TempSaveLesson::where(['lesson_id' => $l_id, 'user_id' => $user_id])->get()->first();

            $temo_lsn_data = $lesson->getOriginal();

            $step = isset($temo_lsn_data['step']) ? $temo_lsn_data['step'] : '';
            $screen = isset($temo_lsn_data['screen']) ? $temo_lsn_data['screen'] : '';
            $spreadsheetData = isset($temo_lsn_data['lesson']) ? unserialize($temo_lsn_data['lesson']) : array();

            return response()->json(['status'=>1,  'spreadsheetData'=>$spreadsheetData, 'screen' => $screen, 'step' => $step]);
        } else {

            return response()->json(['status'=>0,  'msg'=>'No any spreadsheet running...']);

        }

    }


    public function getLessonSteps(Request $request) {

        $lesson_id = $request->get('lesson_id');

        $lesson_sections = LessonSteps::select('section', 'title')->distinct()->where('lesson_id', $lesson_id)->orderBy('section', 'ASC')->get();

        $instructions_html = "";

        if($lesson_sections){

            $lesson_steps = array();
            $hints = array();

            foreach ($lesson_sections as $instructions) {
                # code...

                if($instructions->section == 1){
                    $dsply = 'block';
                } else {
                    $dsply = 'none';
                }

                $instructions_html .= '<div class="lcltc1" id="step'.$instructions->section.'" style="display:'.$dsply.'">';
                $instructions_html .= '<span class="lcltc1-title">'.$instructions->title.'</span>
                <div class="lcltc1-contant">
                <div class="lcltc1-mm">';

                $lesson_steps = LessonSteps::select('step', 'instructions', 'has_automatic_values')->where(['lesson_id' => $lesson_id, 'section' => $instructions->section])->orderBy('step', 'ASC')->get();

                if($lesson_steps){

                    $bottom_step_bullet = "";

                    $bottom_step_bullet .= '<div class="sub-lesson-contant-left-tab-menu">
                    <span class="previous_btn">&laquo</span>
                    <ul class="sub-esson-menu spread_sub_steps_clk">';

                    foreach ($lesson_steps as $stps) {

                        $l_step_id = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $instructions->section, 'step' => $stps->step])->pluck('id')->first();

                        if (LessonStepHints::where('lesson_steps_id', '=', $l_step_id)->exists()) {
                           $hints = LessonStepHints::select('hint')->where('lesson_steps_id',$l_step_id)->get();
                           //$hints = $hints->getOriginal();
                        }


                        if($stps->step == 1){
                            $dslp = 'block';
                        } else {
                            $dslp = 'none';
                        }

                        $instructions_html .= '<div class="sub-lesson-step-contant" id="sub'.$instructions->section.'-step'.$stps->step.'" style="display:'.$dslp.'">';

                        if($stps->has_automatic_values == 1){

                            $instructions_html .= '<p><button class="add-historical-values">Input historical Values</button></p>';

                        }

                        $instructions_html .= $stps->instructions;

                        if($hints){

                            $h = 1;

                            foreach ($hints as $hint) {

                                $instructions_html .= '<p><span class="mm-tooltip" title="'.$hint['hint'].'"><strong>Hint '.$h.'</strong></span></p>';

                                $h++;

                            }

                        }


                        $instructions_html .= '</div>';

                        if($stps->step == 1){
                            $dslp = 'class="active"';
                        } else {
                            $dslp = '';
                        }

                        $bottom_step_bullet .= '<li><a href="javascript:void(0)" '.$dslp.' data-step="sub'.$instructions->section.'-step'.$stps->step.'">'.$stps->step.'</a></li>';
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

        return response()->json(['status'=>1,  'stepsHtml'=>$instructions_html]);


    }


    public function getHistoricalData(Request $request) {

        $lesson_id = ($request->get('lesson_id') != null) ? $request->get('lesson_id') : '';

        $screen = ($request->get('screen') != null) ? $request->get('screen') : '';

        $step = ($request->get('step') != null) ? $request->get('step') : '';

        $hData = LessonSteps::where(['lesson_id' => $lesson_id, 'section' => $screen, 'step' => $step])->pluck('automatic_values')->first();

        if($hData) {
            return response()->json(['status'=>1,  'hData'=>$hData]);
        }

        return response()->json(['status'=>0, 'msg'=>'Historical data not found!']);

    }


    public function getLessonListing(Request $request) {

        $lessonlist = Lesson::select('id', 'name')->get();
        //$new_empty_lesson = $new_empty_lesson->getOriginal();
        
        /*echo '<pre>';
        print_r($new_empty_lesson);
        exit();   */

        return view("pages.lesson", compact('lessonlist'));

    }


}
