<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonStepHints extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lesson_steps_id', 'hint'
    ];

    protected $table = 'lesson_step_hints';
}
