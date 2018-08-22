<?php

use Illuminate\Database\Seeder;

class EgressTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EgressTag::class, 10)->create();
    }
}
