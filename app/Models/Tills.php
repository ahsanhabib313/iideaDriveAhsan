<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tills extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'status' , 'till_operators', 'order_in_queue', 'order_delivered', 'last_order_delivered'];
}