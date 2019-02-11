<?php

use Illuminate\Database\Seeder;

class BuildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Build::class, 5)->create();
    }
}
