 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->string('email');
			$table->string('password');
			$table->timestamps();
		});

		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
		});

		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->string('name');
			$table->text('recipe');
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
		Schema::drop('recipes');
		Schema::drop('categories');
		Schema::drop('users');
	}

}
