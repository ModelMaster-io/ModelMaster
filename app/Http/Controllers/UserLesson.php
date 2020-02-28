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

        /*$temp_lesson->lesson_id = $request->get('lesson_id');
        $temp_lesson->user_id = Auth::user()->id;
        $temp_lesson->screen = $request->get('screen');
        $temp_lesson->step = $request->get('step');
        $temp_lesson->lesson = serialize($request->get('lesson'));

        $temp_lesson->save();*/

        $lesson = Lesson::where(['id' => 1])->pluck('lesson')->first();

        dd($lesson);

        $temp_lesson_save = TempSaveLesson::updateOrCreate(
            ['user_id' => Auth::user()->id, 'lesson_id' => $request->get('lesson_id')],
            ['screen' => $request->get('screen'), 'step' => $request->get('step'), 'lesson' => serialize($request->get('lesson'))]
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
