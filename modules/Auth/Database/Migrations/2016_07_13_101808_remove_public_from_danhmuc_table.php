<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemovePublicFromDanhmucTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('danhmuc', function(Blueprint $table)
		{
			$table->dropColumn('public');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('danhmuc', function(Blueprint $table)
		{
			$table->integer('public');

		});
	}

}
