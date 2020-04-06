<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempSaveLesson extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lesson_id', 'user_id', 'screen', 'step', 'lesson' 
    ];

    protected $table = 'temp_save_lessons';
}
