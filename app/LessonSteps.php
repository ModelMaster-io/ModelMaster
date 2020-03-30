<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
