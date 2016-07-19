<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class OnlinecourseTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::table('onlinecourse')->insert([
			'url'=>'http://www.fineartschool.net/Poetry'
		]);

		DB::table('onlinecourse')->insert([
			'url'=>'http://www.fineartschool.net/Composition'
		]);
		// $this->call("OthersTableSeeder");
	}

}