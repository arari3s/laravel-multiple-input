<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentClassroom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'classrooms_id', 'students_id'
    ];

    // relationships one to many studens to student_classrooms
    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id', 'id');
    }
}
