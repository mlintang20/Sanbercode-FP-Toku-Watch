<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    // Agar tidak dianggap jamak dalam basa inggris ex: Films
    protected $table = "order_detail";

    // Data yang akan dimanipulasi
    protected $fillable = ['price', 'quantity', 'item_id', 'cart_order_id'];
}
