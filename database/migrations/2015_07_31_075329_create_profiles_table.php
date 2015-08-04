<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('profiles', function(Blueprint $table)
                {
                    $table->increments('id');
                    $table->integer('user_id')->unique();


$table->enum('country',algerian, france, usa)->nullable();
$table->enum('language',english, french, arabe)->nullable();
$table->enum('sex',male, female)->nullable();
$table->date('date')->nullable();

                    $table->timestamps();
                });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('profiles');
	}
}
