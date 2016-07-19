<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class OnsitecourseTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('onsitecourse')->insert([
			'location'=>'123 Smith',
			'days'=>30,
			'time'=>'11:30'
		]);
		// $this->call("OthersTableSeeder");
	}

}