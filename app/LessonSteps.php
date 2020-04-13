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
                $btn_val = 'continue lesson';
            }

        }

        return $btn_val;
    }

}
