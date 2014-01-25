<?php

use Illuminate\Database\Migrations\Migration;

class CreateBlogPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts',function($table)
		{
			$table->increments('id');
			$table->string('author');
			$table->string('text');
			$table->date('updated_at');
			$table->date('created_at');
		});
	}
	
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('blog_posts');
	}

}