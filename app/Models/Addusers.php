<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addusers extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name' , 'username', 'email'];

}