<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
            [
                'name' => 'SPP 2021/2022',
                'price' => '180000',
            ],
            [
                'name' => 'SPP 2022/2023',
                'price' => '140000',
            ],
            [
                'name' => 'SARANA',
                'price' => '1250000',
            ],
            [
                'name' => 'SARANA BP',
                'price' => '650000',
            ],
        ];

        DB::table('payments')->insert($payment);
    }
}
