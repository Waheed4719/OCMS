<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function user(){
      return $this->belongsTo(User::class,'to');
    }
    public function Therapists(){
      return $this->belongsTo(Therapists::class,'from');
    }

}
