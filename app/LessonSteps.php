<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\TempSaveLesson;

class LessonSteps extends Model
{
    //

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lesson_id', 'section', 'step', 'title', 'instructions', 'answer', 'error_message'
    ];

    protected $table = 'lesson_steps';


    public static function userLessonStatus($lesson_id){

        $btn_val = 'start lesson';

        if (Auth::check()){

            $user_id = Auth::id();
            if (TempSaveLesson::where(['lesson_id' => $lesson_id, 'user_id' => $user_id])->exists()) {

                $latest_screen = TempSaveLesson::where(['lesson_id'=> $lesson_id, 'user_id' => $user_id])->max('screen');

                $latest_step = TempSaveLesson::where(['lesson_id'=>$lesson_id, 'screen'=>$latest_screen, 'user_id' => $user_id])->max('step');

                //$tempsteps = TempSaveLesson::select('screen', 'step')->where(['lesson_id' => $lesson_id, 'user_id' => $user_id])->first();

                $max_screen = self::where('lesson_id', $lesson_id)->max('section');

                $max_step = self::where(['lesson_id'=>$lesson_id, 'section'=>$max_screen])->max('step');

                if($max_screen == $latest_screen && $max_step == $latest_step){
                    $btn_val = 'lesson finished';
                } else {
                    $btn_val = 'continue lesson';
                }

            }

        }

        return $btn_val;
    }

}
