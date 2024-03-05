<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['student_name' , 'email', 'phone', 'product_name', 'status', 'product_id', 'student_id' ];
}
