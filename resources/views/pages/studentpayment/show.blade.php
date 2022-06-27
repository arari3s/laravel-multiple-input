<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Pembayaran &raquo; #{{ $studentPayment->id }}
            {{ $studentPayment->studenclassroom->student->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.classroom.index') }}"
                    class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded shadow-lg">
                    Kembali
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                <div class="p6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <th class="border px-6 py-4 text-right">SPP</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->spp_id != '')
                                        {{ $studentPayment->spp->name }} -
                                        {{ number_format($studentPayment->spp->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">SARANA</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->sarana_id != '')
                                        {{ $studentPayment->sarana->name }} -
                                        {{ number_format($studentPayment->sarana->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PTS GASAL</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pts1_id != '')
                                        {{ $studentPayment->pts1->name }} -
                                        {{ number_format($studentPayment->pts1->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PTS GENAP</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pts2_id != '')
                                        {{ $studentPayment->pts2->name }} -
                                        {{ number_format($studentPayment->pts2->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PAS</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pas_id != '')
                                        {{ $studentPayment->pas->name }} -
                                        {{ number_format($studentPayment->pas->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PAT</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pat_id != '')
                                        {{ $studentPayment->pat->name }} -
                                        {{ number_format($studentPayment->pat->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">INFAQ</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->infaq_id != '')
                                        {{ $studentPayment->infaq->name }} -
                                        {{ number_format($studentPayment->infaq->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PKL</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pkl_id != '')
                                        {{ $studentPayment->pkl->name }} -
                                        {{ number_format($studentPayment->pkl->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PTS GENAP</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->pts2_id != '')
                                        {{ $studentPayment->pts2->name }} -
                                        {{ number_format($studentPayment->pts2->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">KUNJUNGAN INDUSTRI</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->ki_id != '')
                                        {{ $studentPayment->ki->name }} -
                                        {{ number_format($studentPayment->ki->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">PERPISAHAN</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->perpisahan_id != '')
                                        {{ $studentPayment->perpisahan->name }} -
                                        {{ number_format($studentPayment->perpisahan->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">DAFTAR ULANG</th>
                                <td class="border px-6 py-4">
                                    @if ($studentPayment->du_id != '')
                                        {{ $studentPayment->du->name }} -
                                        {{ number_format($studentPayment->du->price) }}
                                    @else
                                        -- Tidak ada tagihan --
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
