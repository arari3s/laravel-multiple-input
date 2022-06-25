<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_classrooms_id', 'payments_id',
    ];

    // relationships one to many studenclassroom to student_payment
    public function studenclassroom()
    {
        return $this->belongsTo(StudentClassroom::class, 'student_classrooms_id', 'id');
    }

    // relationships one to many payments to student_payment
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payments_id', 'id');
    }
}
