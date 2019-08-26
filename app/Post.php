<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

    public function therapist(){
        return $this->belongsTo('App\Therapists','user_id');
    }
    public function admin(){
        return $this->belongsTo('App\Admin','user_id');
    }
}
