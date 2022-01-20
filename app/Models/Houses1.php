<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses1 extends Model
{
  use HasFactory;
  protected $table = 'houses1';
  protected $fillable = [
    'HouseNo',
    'Category',
    'Description',
    'Price'
  ];
}
