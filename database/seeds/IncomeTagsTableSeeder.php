<?php

use Illuminate\Database\Seeder;

class IncomeTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\IncomeTag::class, 10)->create();
    }
}
