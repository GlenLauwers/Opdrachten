<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id_user')->unique;
			$table->string('voornaam');
			$table->string('familienaam');
			$table->string('email')->unique();
			$table->string('wachtwoord');
			$table->string('straat');
			$table->string('nummer');
			$table->string('bus');
			$table->string('postcode');
			$table->string('gemeente');
			$table->string('land');
			$table->string('telefoon');
			$table->string('type');
			$table->string('profielfoto');
			$table->boolean('actief');
			$table->rememberToken();
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
		Schema::drop('user');
	}

}
