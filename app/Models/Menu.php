<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
     protected $filable = ['item_name', 'item_image' , 'item_category', 'item_price', 'item_description'];
}