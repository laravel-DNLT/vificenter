<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class StudentgradeTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('studentgrade')->insert([
			'courseid'=>1,
			'studentid'=>1,
			'grande'=>3.5
		]);
		
		// $this->call("OthersTableSeeder");
	}

}