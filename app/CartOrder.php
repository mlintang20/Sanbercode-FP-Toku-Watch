<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartOrder extends Model
{
       // Agar tidak dianggap jamak dalam basa inggris ex: Films
       protected $table = "cart_order";

       // Data yang akan dimanipulasi
       protected $fillable = ['total_price', 'shipping_address', 'status', 'shipping_cost', 'user_id'];

     public function user()
     {
         return $this->belongsTo('App\User', 'user_id');
     }

     public function items()
     {
       return $this->belongsToMany(Item::class, 'order_detail', 'cart_order_id', 'item_id');
     }
}
