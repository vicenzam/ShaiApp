<?php

use Illuminate\Database\Seeder;

class IncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Income::class, 50)->create()->each(function(App\Income $income){
            $income->tags()->attach([
                rand(1,5),
                rand(6,10),
            ]);
        });
    }
}
