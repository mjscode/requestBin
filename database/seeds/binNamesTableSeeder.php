<?php

use Illuminate\Database\Seeder;

class binNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bin_names')->insert(
            ['name'=>'pull']
        );
        DB::table('bin_names')->insert(
            ['name'=>'request']
        );
        DB::table('bin_names')->insert(
            ['name'=>'get']
        );
        DB::table('bin_names')->insert(
            ['name'=>'ask']
        );
    }
}
