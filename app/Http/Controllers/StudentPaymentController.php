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
            $query = StudentPayment::with('studenclassroom.student', 'payment')->where('student_classrooms_id', $student_classroom->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('dashboard.student-payment.destroy', $item->id) . '" method="POST">
                            <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                                Hapus
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    ';
                })
                ->editColumn('payment.price', function ($item) {
                    return number_format($item->payment->price);
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
        $data = $request->input('payments_id');

        foreach ($data as $d) {
            StudentPayment::create([
                'student_classrooms_id' => $student_classroom->id,
                'payments_id' => $d,
            ]);
        }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPayment $studentPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentPayment $studentPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPayment $studentPayment)
    {
        //
    }
}
