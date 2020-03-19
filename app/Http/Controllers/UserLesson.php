<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\TempSaveLesson;
use App\Lesson;

class UserLesson extends Controller
{

	//Constructor
    public function __construct(){
         //$this->middleware('auth');
    }


    public function saveTempUserLesson(TempSaveLesson $temp_lesson, Request $request) {

        //dd(serialize($request->get('lesson')));

        $lesson_id = $request->get('lesson_id');
        $section = $request->get('screen');
        $step = $request->get('step');
        $curr_lesson = $request->get('lesson');

        $lesson_steps = DB::table('lesson_steps')->where(['lesson_id' => $lesson_id, 'section' => $section, 'step' => $step])->first();

        $row_col = array();
        $right_rc = array();


        if($lesson_steps){

            $answer = isset($lesson_steps->answer) ? json_decode($lesson_steps->answer) : array();
            $answer_datatable = $answer->sheets->Sheet1->data->dataTable;


            if($curr_lesson){

                $curr_answer = json_decode($curr_lesson); 
                $curr_answer_datatable = isset($curr_answer->sheets->Sheet1->data->dataTable) ? $curr_answer->sheets->Sheet1->data->dataTable : '';

                $row = array();
                $col = array();
                foreach ($answer_datatable as $key => $value) {

                    foreach ($value as $sub_key => $sub_value) {

                        if(isset($sub_value->value)){

                            if(!isset($curr_answer_datatable->$key) || !isset($curr_answer_datatable->$key->$sub_key) || !isset($curr_answer_datatable->$key->$sub_key->value) || ($sub_value->value != $curr_answer_datatable->$key->$sub_key->value)){

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

        $lesson_steps = DB::table('lesson_steps')->where('lesson_id', 1)->get();

        if($lesson_steps) {
            return response()->json(['status'=>1,  'data'=>$lesson_steps]);
        }

        return response()->json(['status'=>0,  'msg'=>'Lesson Step Record Not Found!']);

    }


}
