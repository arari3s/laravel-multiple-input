<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'price'
    ];

    // relationships one to many payments to student_payments
    public function student_payments()
    {
        return $this->hasMany(StudentPayment::class, 'payments_id', 'id');
    }
}
