<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = [
            [
                'name' => 'X MM1',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'X MM2',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'X MM3',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'X AKL',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'X OTKP',
                'department' => 'OTOMATISASI DAN TATA KELOLA PERKANTORAN',
            ],
            [
                'name' => 'X BDPM',
                'department' => 'BISNIS DARING DAN PEMASARAN',
            ],
        ];

        DB::table('classrooms')->insert($classrooms);
    }
}
