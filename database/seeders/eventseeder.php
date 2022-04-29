<?php

namespace Database\Seeders;

use App\Models\event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class eventseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        event::factory()->count(40)->create();
    }
}
