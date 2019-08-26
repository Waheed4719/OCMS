<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $dates = ['created_at','updated_at'];
  public $timestamps = true;
  protected $fillable=[
    'from','to','message','d-type','type',
  ];
    public function user(){
      return $this->belongsTo(User::class,'to');
    }
    public function Therapists(){
      return $this->belongsTo(Therapists::class,'from');
    }

}
