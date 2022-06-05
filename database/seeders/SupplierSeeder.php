<?php

namespace Database\Seeders;

use App\Models\supplier;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        supplier::factory()->count(20)->create();
    }
}
