<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanakans extends Model
{
    use HasFactory;
    protected $fillable = ['fname', 'lname', 'username', 'email', 'tel', 'img_path'];
}
