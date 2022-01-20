<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants1 extends Model
{
  use HasFactory;
  protected $table = 'tenants1';
  protected $fillable = [
    'HouseNo',
    'TenantName',
    'MonthlyRate',
    'OutstandingBalance',
    'LastPayment'
  ];
}
