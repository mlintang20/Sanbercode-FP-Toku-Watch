<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "item";

    // Data yang akan dimanipulasi
    protected $fillable = ['name', 'price', 'specs', 'synopsis', 'thumbnail'];

    /*public function category_item(){
        return $this->hasMany('App\CategoryItem');
    } */

    public function category(){
        return $this->belongsToMany('App\Category');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }
}
