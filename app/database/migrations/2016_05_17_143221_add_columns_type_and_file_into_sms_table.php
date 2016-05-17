<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsTypeAndFileIntoSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sms', function(Blueprint $table)
		{
			$table->string('type')->default('text')->after('slug');
			$table->string('image_url')->nullable()->after('sms_content');
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
			$table->dropColumn(['type', 'image_url']);
		});
	}

}
