<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_classrooms_id', 'spp_id', 'sarana_id', 'pts1_id', 'pts2_id', 'pas_id', 'pat_id', 'infaq_id', 'pkl_id', 'ki_id', 'perpisahan_id', 'du_id', 'other_id'
    ];

    // relationships one to many studenclassroom to student_payment
    public function studenclassroom()
    {
        return $this->belongsTo(StudentClassroom::class, 'student_classrooms_id', 'id');
    }

    // relationships one to many spp to student_payment
    public function spp()
    {
        return $this->belongsTo(Payment::class, 'spp_id', 'id');
    }

    // relationships one to many sarana to student_payment
    public function sarana()
    {
        return $this->belongsTo(Payment::class, 'sarana_id', 'id');
    }

    // relationships one to many pts1 to student_payment
    public function pts1()
    {
        return $this->belongsTo(Payment::class, 'pts1_id', 'id');
    }

    // relationships one to many pts2 to student_payment
    public function pts2()
    {
        return $this->belongsTo(Payment::class, 'pts2_id', 'id');
    }

    // relationships one to many pas to student_payment
    public function pas()
    {
        return $this->belongsTo(Payment::class, 'pas_id', 'id');
    }

    // relationships one to many pat to student_payment
    public function pat()
    {
        return $this->belongsTo(Payment::class, 'pat_id', 'id');
    }

    // relationships one to many infaq to student_payment
    public function infaq()
    {
        return $this->belongsTo(Payment::class, 'infaq_id', 'id');
    }

    // relationships one to many pkl to student_payment
    public function pkl()
    {
        return $this->belongsTo(Payment::class, 'pkl_id', 'id');
    }

    // relationships one to many ki to student_payment
    public function ki()
    {
        return $this->belongsTo(Payment::class, 'ki_id', 'id');
    }

    // relationships one to many perpisahan to student_payment
    public function perpisahan()
    {
        return $this->belongsTo(Payment::class, 'perpisahan_id', 'id');
    }

    // relationships one to many du to student_payment
    public function du()
    {
        return $this->belongsTo(Payment::class, 'du_id', 'id');
    }

    // relationships one to many other to student_payment
    public function other()
    {
        return $this->belongsTo(Payment::class, 'other_id', 'id');
    }
}
