<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

include('ColumnsTableSeeder.php');
include('UsersTableSeeder.php');

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

                $this->call('ColumnsTableSeeder');
                $this->call('UsersTableSeeder');
	}

}
