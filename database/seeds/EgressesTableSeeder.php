<?php

use Illuminate\Database\Seeder;

class EgressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Egress::class, 40)->create()->each(function(App\Egress $egress){
            $egress->tags()->attach([
                rand(1,5),
                rand(6,10),
            ]);
        });
    }
}
