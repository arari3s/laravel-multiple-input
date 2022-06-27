<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentPaymentRequest;
use App\Models\Payment;
use App\Models\Student;
use App\Models\StudentClassroom;
use App\Models\StudentPayment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StudentClassroom $student_classroom)
    {
        if (request()->ajax()) {
            $query = StudentPayment::with('studenclassroom.student')->where('student_classrooms_id', $student_classroom->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.student-payment.show', $item->id) . '">
                            Show
                        </a>
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.student-payment.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.student-payment.destroy', $item->id) . '" method="POST">
                            <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                                Hapus
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.studentpayment.index', compact('student_classroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StudentClassroom $student_classroom)
    {
        $payment = Payment::all();

        return view('pages.studentpayment.create', compact('student_classroom', 'payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentPaymentRequest $request, StudentClassroom $student_classroom)
    {
        StudentPayment::create([
            'student_classrooms_id' => $student_classroom->id,
            'spp_id' => $request->input('spp_id'),
            'sarana_id' => $request->input('sarana_id'),
            'pts1_id' => $request->input('pts1_id'),
            'pts2_id' => $request->input('pts2_id'),
            'pas_id' => $request->input('pas_id'),
            'pat_id' => $request->input('pat_id'),
            'infaq_id' => $request->input('infaq_id'),
            'pkl_id' => $request->input('pkl_id'),
            'ki_id' => $request->input('ki_id'),
            'perpisahan_id' => $request->input('perpisahan_id'),
            'du_id' => $request->input('du_id'),
        ]);

        return redirect()->route('dashboard.student-classroom.student-payment.index', $student_classroom->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPayment $studentPayment)
    {
        return view('pages.studentpayment.show', compact('studentPayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPayment $student_payment)
    {
        $payment = Payment::all();

        return view('pages.studentpayment.edit', compact('student_payment', 'payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function update(StudentPaymentRequest $request, StudentPayment $student_payment)
    {
        $data = $request->all();

        $student_payment->update($data);

        return redirect()->route('dashboard.student-payment.show', $student_payment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPayment $studentPayment)
    {
        $studentPayment->delete();

        return redirect()->route('dashboard.student-classroom.student-payment.index', $studentPayment->student_classrooms_id);
    }
}
