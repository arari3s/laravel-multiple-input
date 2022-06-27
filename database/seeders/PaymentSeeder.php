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
                'name' => 'SPP X 2019/2020',
                'price' => '160000',
            ],
            [
                'name' => 'SPP XI 2020/2021',
                'price' => '175000',
            ],
            [
                'name' => 'SPP XII 2021/2022',
                'price' => '185000',
            ],
            [
                'name' => 'SPP X 2020/2021',
                'price' => '175000',
            ],
            [
                'name' => 'SPP XI 2021/2022',
                'price' => '175000',
            ],
            [
                'name' => 'SPP X 2021/2022',
                'price' => '180000',
            ],
            [
                'name' => 'DAFTAR ULANG',
                'price' => '200000',
            ],
            [
                'name' => 'SARANA 2019/2020',
                'price' => '1200000',
            ],
            [
                'name' => 'SARANA 2019/2020 BP',
                'price' => '600000',
            ],
            [
                'name' => 'SARANA 2020/2021',
                'price' => '1100000',
            ],
            [
                'name' => 'SARANA 2020/2021 BP',
                'price' => '550000',
            ],
            [
                'name' => 'SARANA 2021/2022',
                'price' => '1250000',
            ],
            [
                'name' => 'SARANA 2021/2022 BP',
                'price' => '625000',
            ],
            [
                'name' => 'INFAQ 2021/2022',
                'price' => '300000',
            ],
            [
                'name' => 'LUNAS',
                'price' => '0',
            ],
        ];

        DB::table('payments')->insert($payment);
    }
}
