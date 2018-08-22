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
        factory(App\Egress::class, 30)->create();
    }
}
