<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Therapists extends Authenticatable
{
// protected $guard = 'therapist';
  protected $fillable = [
      'name', 'email', 'password','gender','religion','age'
  ];
    public function User(){
      return $this->belongsto('App\User');
    }
    public function Appointment(){
      return $this->hasMany('App\Appointments','therapist_id');
    }
    protected $dates = [
      'created_at',
    ];
    protected $guard = 'therapist';

    public function message(){
      return $this->hasMany(Message::class,'from');
    }
    public function posts(){
      return $this->hasMany('App\post');
    }
}
