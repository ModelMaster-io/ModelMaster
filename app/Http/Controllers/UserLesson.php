<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $user_id = Auth::user()->id;

        $new_empty_lesson = Lesson::where(['id' => 1])->pluck('lesson')->first();

        $old_lesson = TempSaveLesson::where(['lesson_id' => 1, 'user_id' => $user_id])->pluck('lesson')->first();

        if($old_lesson != ''){
            $lesson = $old_lesson;
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

        return response()->json(['status'=>1,  'success'=>'Lesson Save Successfully!']);

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


}
