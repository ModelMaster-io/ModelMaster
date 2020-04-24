<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\TempSaveLesson;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','service_provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function getUserProvider($id){
        return User::select('service_provider')->where('id', $id)->pluck('service_provider')->first();
    }


    public static function getUserLessonsList($id){
      return TempSaveLesson::select('lesson_id')->where('user_id', $id)->distinct('lesson_id')->pluck('lesson_id')->toArray();
    }

    public static function getUserLessonsExist($id){
      return TempSaveLesson::where('user_id', $id)->exists();
    }


}
