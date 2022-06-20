<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nis', 'name', 'phone', 'gender', 'address'
    ];

    // relationships one to many studens to student_classrooms
    public function student_classrooms()
    {
        return $this->hasMany(StudentClassroom::class, 'students_id', 'id');
    }

    // relationships one to many studens to student_payments
    public function student_payments()
    {
        return $this->hasMany(StudentPayment::class, 'students_id', 'id');
    }
}
