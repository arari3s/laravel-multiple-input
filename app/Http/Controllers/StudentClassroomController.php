<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\StudentClassroom;
use Illuminate\Http\Request;

class StudentClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "input siswa dari classroom";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentClassroom  $studentClassroom
     * @return \Illuminate\Http\Response
     */
    public function show(StudentClassroom $studentClassroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentClassroom  $studentClassroom
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentClassroom $studentClassroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentClassroom  $studentClassroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentClassroom $studentClassroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentClassroom  $studentClassroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentClassroom $studentClassroom)
    {
        //
    }
}
