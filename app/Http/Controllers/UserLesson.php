<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\TempSaveLesson;

class UserLesson extends Controller
{

	//Constructor
    public function __construct(){
         //$this->middleware('auth');
    }


    public function saveTempUserLesson(TempSaveLesson $temp_lesson, Request $request) {

        $temp_lesson->lesson_id = $request->get('lesson_id');
        $temp_lesson->user_id = Auth::user()->id;
        $temp_lesson->screen = $request->get('screen');
        $temp_lesson->step = $request->get('step');
        $temp_lesson->lesson = serialize($request->get('lesson')); 

        $temp_lesson->save();

        return response()->json(['status'=>1,  'success'=>'Lesson Save Successfully!']);

    }
}
