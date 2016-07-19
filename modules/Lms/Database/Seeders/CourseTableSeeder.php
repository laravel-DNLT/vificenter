<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class CourseTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('course')->insert([
			'title'=>'Chemistry',
			'credits'=>4,
			'departmentID'=>1

		]);
		DB::table('course')->insert([
			'title'=>'Physics',
			'credits'=>4,
			'departmentID'=>1

		]);
		// $this->call("OthersTableSeeder");
	}

}