<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments1 extends Model
{
    use HasFactory;
    protected $table = 'payments1';
    protected $fillable = [
      'PaymentId',
      'Date',
      'TenantName',
      'Amount',
      'Status'
    ];
}
