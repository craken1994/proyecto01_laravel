<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Schema::disableForeignKeyConstraints();
		DB::table('employees')->truncate();
		Schema::enableForeignKeyConstraints();

		DB::table('employees')->insert([
		  [
			 'names' => 'Alexander',
			 'surnames' => 'Leandro',
			 'dni' => '12345678'
		  ],
		  [
			 'names' => 'Luis',
			 'surnames' => 'Gómez',
			 'dni' => '87654321'
		  ],
		]);
    }
}
