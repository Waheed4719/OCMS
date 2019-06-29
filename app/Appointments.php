<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
  protected $table = 'Appointments';
  public $primaryKey = 'id';
  public $timestamps = true;
  protected $fillable=[
    'patient_id','therapist_id'
  ];
  public function therapists(){
    return $this->belongsTo('App\Therapists','therapist_id');
  }


 public function users(){
   return $this->belongsTo('App\user','patient_id');
 }
}
