<?php

use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('stations')->insert([
            'station' => 'Calimio'
        ]);

         DB::table('stations')->insert([
            'station' => 'Comercio'
        ]);

        DB::table('stations')->insert([
            'station' => 'Norte'
        ]);

        DB::table('stations')->insert([
            'station' => 'Centro'
        ]);

        DB::table('stations')->insert([
            'station' => 'Sur'
        ]);

       DB::table('stations')->insert([
            'station' => 'Aguablanca'
       ]);

       DB::table('stations')->insert([
            'station' => 'Peñon'
       ]);
    }
}
