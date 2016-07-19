<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class PersonTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		// $this->call("OthersTableSeeder");
		DB::table('person')->insert([
			'lastname'=>'Abercrombie',
			'firstname'=>'Kim',
			'hiredate'=>'1995-03-11',
			'enrollmentdate' =>'2005-09-01'
		]);
		DB::table('person')->insert([
			'lastname'=>'Justice',
			'firstname'=>'Peggy',
			'hiredate'=>'2001-09-01',
			'enrollmentdate' =>'2005-09-01'
		]);
	}

}