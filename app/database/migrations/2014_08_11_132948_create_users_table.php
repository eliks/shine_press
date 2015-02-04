<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			// $table->string('company_name',255);
			$table->string('email', 255);
			$table->integer('remember')->default(0);
			$table->integer('verified')->default(0);
			$table->integer('activated')->default(0);
			$table->integer('usertype')->default(3);//defaulted to basic user(3), Admin - 2, Super Admin - 1
			$table->string('password', 255);
			
			$table->string('first_name', 255);
			$table->string('other_name', 255);
			$table->string('last_name', 255);
			
			$table->string('remember_token',255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}