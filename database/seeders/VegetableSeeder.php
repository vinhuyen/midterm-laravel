<?php

namespace Database\Seeders;

use Cassandra\Decimal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vegetables')->insert([
            'vegetable' => Str::random(10),
            'old_price' => rand(1,100),
            'new_price' => rand(1,100),
            'image' =>Str::random(10),
            'category_id' => '1'
        ]);
    }
}
