<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            // [
            //     'title' => 'Gila Belajar',
            //     'slug' => 'gila-belajar',
            //     'price' => 280,
            //     'created_at' => date('Y-m-d H:i:s', time()),
            //     'updated_at' => date('Y-m-d H:i:s', time()),
            // ],
            // [
            //     'title' => 'Baru Mulai',
            //     'slug' => 'baru-mulai',
            //     'price' => 140,
            //     'created_at' => date('Y-m-d H:i:s', time()),
            //     'updated_at' => date('Y-m-d H:i:s', time()),
            // ],
            [
                'title' => 'Pulsa 10.000',
                'slug' => 'pulsa-10k',
                'price' => 12,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Pulsa 20.000',
                'slug' => 'pulsa-20k',
                'price' => 23,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Pulsa 50.000',
                'slug' => 'pulsa-50k',
                'price' => 55,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Pulsa 100.000',
                'slug' => 'pulsa-100k',
                'price' => 110,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}
