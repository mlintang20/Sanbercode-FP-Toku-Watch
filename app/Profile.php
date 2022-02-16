<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "profile";

    // Data yang akan dimanipulasi
    protected $fillable = ['address', 'phone', 'user_id'];

     // One to one yang ada foreign key 
     public function user()
     {
         return $this->belongsTo('App\User', 'user_id');
     }
    
}
