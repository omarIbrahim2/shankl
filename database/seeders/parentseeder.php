<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class parentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentts')->insert([
            'name' => "Kamal ahmed",
            'email' => 'kamal@gmail.com',
            "phone"=>"01054585",
            'password' => Hash::make('123456789'),
        ]);
    }
}
