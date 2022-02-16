<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryItem extends Model
{
    // Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "category_item";

    // Data yang akan dimanipulasi
    protected $fillable = ['category_id', 'item_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
