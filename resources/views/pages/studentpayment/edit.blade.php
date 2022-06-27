<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Siswa &raquo; {{ $student_payment->studenclassroom->student->name }} &raquo; Pembayaran &raquo; Edit
        </h2>
    </x-slot>

    <x-slot name="script">
        {{-- select2 --}}
        <script script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                {{-- Error Handling --}}
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('dashboard.student-payment.update', $student_payment->id) }}" class="w-full"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 w-full">
                            <div class="w-full px-3 py-3 hidden">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Student
                                    Classroom</label>
                                <input
                                    value="{{ old('student_classrooms_id') ?? $student_payment->student_classrooms_id }}"
                                    name="student_classrooms_id"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text">
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SPP</label>
                                <select class="select2" data-width="100%" name="spp_id">
                                    @if ($student_payment->spp_id != null)
                                        <option value="{{ $student_payment->spp_id }}" selected>
                                            {{ $student_payment->spp->name }} -
                                            {{ number_format($student_payment->spp->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SARANA</label>
                                <select class="select2" data-width="100%" name="sarana_id">
                                    @if ($student_payment->sarana_id != null)
                                        <option value="{{ $student_payment->sarana_id }}" selected>
                                            {{ $student_payment->sarana->name }} -
                                            {{ number_format($student_payment->sarana->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PTS
                                    GASAL</label>
                                <select class="select2" data-width="100%" name="pts1_id">
                                    @if ($student_payment->pts1_id != null)
                                        <option value="{{ $student_payment->pts1_id }}" selected>
                                            {{ $student_payment->pts1->name }} -
                                            {{ number_format($student_payment->pts1->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PTS
                                    GENAP</label>
                                <select class="select2" data-width="100%" name="pts2_id">
                                    @if ($student_payment->pts2_id != null)
                                        <option value="{{ $student_payment->pts2_id }}" selected>
                                            {{ $student_payment->pts2->name }} -
                                            {{ number_format($student_payment->pts2->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PAS</label>
                                <select class="select2" data-width="100%" name="pas_id">
                                    @if ($student_payment->pas_id != null)
                                        <option value="{{ $student_payment->pas_id }}" selected>
                                            {{ $student_payment->pas->name }} -
                                            {{ number_format($student_payment->pas->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PAT</label>
                                <select class="select2" data-width="100%" name="pat_id">
                                    @if ($student_payment->pat_id != null)
                                        <option value="{{ $student_payment->pat_id }}" selected>
                                            {{ $student_payment->pat->name }} -
                                            {{ number_format($student_payment->pat->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">INFAQ</label>
                                <select class="select2" data-width="100%" name="infaq_id">
                                    @if ($student_payment->infaq_id != null)
                                        <option value="{{ $student_payment->infaq_id }}" selected>
                                            {{ $student_payment->infaq->name }} -
                                            {{ number_format($student_payment->infaq->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PKL</label>
                                <select class="select2" data-width="100%" name="pkl_id">
                                    @if ($student_payment->pkl_id != null)
                                        <option value="{{ $student_payment->pkl_id }}" selected>
                                            {{ $student_payment->pkl->name }} -
                                            {{ number_format($student_payment->pkl->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">KUNJUNGAN
                                    INDUSTRI</label>
                                <select class="select2" data-width="100%" name="ki_id">
                                    @if ($student_payment->ki_id != null)
                                        <option value="{{ $student_payment->ki_id }}" selected>
                                            {{ $student_payment->ki->name }} -
                                            {{ number_format($student_payment->pat->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">DAFTAR
                                    ULANG</label>
                                <select class="select2" data-width="100%" name="du_id">
                                    @if ($student_payment->du_id != null)
                                        <option value="{{ $student_payment->du_id }}" selected>
                                            {{ $student_payment->du->name }} -
                                            {{ number_format($student_payment->du->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">Add
                                Pembayaran</button>

                            <a href="{{ url()->previous() }}"
                                class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 ml-3 rounded shadow-lg">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
