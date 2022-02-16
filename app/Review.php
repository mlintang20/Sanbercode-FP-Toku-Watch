<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /// Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "review";

    // Data yang akan dimanipulasi
    protected $fillable = ['content', 'rating', 'user_id', 'item_id'];

    public function item(){
        return $this->belongsTo('App\Item');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
