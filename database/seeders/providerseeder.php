<?php

namespace Database\Seeders;

use App\Models\parentt;
use App\Models\provider;
use Database\Factories\parenttFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class providerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $providers = provider::factory()->count(100)->create();
         $parents = parentt::factory()->count(100)->create();

         foreach($providers->random(50) as $provider){
             foreach($parents->random(5) as $parent){
                $provider->parents()->save($parent);
             }
         }



        // foreach($providers as $provider){
        //     foreach($parents as $parent){
        //         $provider->parents()->save($parent);
        //     }

        // }
}
}
