<?php

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cards')->insert([
            'number_card' => rand(1, 100000000000000),
            'balance' => 50000
        ]);

         DB::table('cards')->insert([
            'number_card' => rand(1, 100000000000000),
            'balance' => 20000
        ]);

        DB::table('cards')->insert([
            'number_card' => rand(1, 100000000000000),
            'balance' => 30000
        ]);
    }
}
