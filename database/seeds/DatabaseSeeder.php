<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();

        DB::table('cards')->truncate();
        DB::table('stations')->truncate();

        Schema::enableForeignKeyConstraints();

        $this->call(CardSeeder::class);
        $this->call(StationSeeder::class);
    }
}
