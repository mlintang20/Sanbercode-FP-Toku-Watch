<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "category";

    // set timestamps ke false
    public $timestamps = false;

    // Data yang akan dimanipulasi
    protected $fillable = ['name'];

    public function item(){
        return $this->belongsToMany('App\Item');
    }

    /*public function category_item(){
        return $this->hasMany('App\CategoryItem');
    }*/
}
