<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapists extends Model
{

  protected $fillable = [
      'name', 'email', 'password',
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
}
