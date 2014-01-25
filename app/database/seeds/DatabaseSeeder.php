<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('BlogPostsSeeder');
	}

}

/**
* 
*/
class BlogPostsSeeder extends Seeder
{
	public function run()
	{
		DB::table('blog_posts')->delete();
		
		BlogPosts::create(array(
			'author' => 'Steven Klar',
			'text' => 'Some blog text'
		));
	}
}
