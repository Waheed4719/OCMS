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
    protected $dates = [
      'created_at',
    ];
}
