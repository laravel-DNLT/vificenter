<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class CourseinstructorTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('courseinstructor')->insert([
			'courseid'=>1,
			'personid'=>1
		]);
		// $this->call("OthersTableSeeder");
	}

}