<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCategoryIdSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sms', function(Blueprint $table)
		{
			$table->integer('category_id')->after('id')->unsigned();
			$table->integer('views')->default(0)->after('sms_content')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sms', function(Blueprint $table)
		{
			$table->dropColumn(['views', 'category_id']);
		});
	}

}
