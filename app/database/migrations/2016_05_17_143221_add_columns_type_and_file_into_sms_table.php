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
			$table->integer('user_id')->unsigned()->after('category_id');

			$table->foreign('user_id')->references('id')->on('user');
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
			$table->dropForeign('sms_user_id_foreign');
			$table->dropColumn(['type', 'image_url', 'user_id']);
		});
	}

}
