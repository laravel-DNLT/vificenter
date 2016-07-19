<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
class DepartmentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::table('department')->insert([
			'name'=>'Engineering',
			'budget'=>'350000',
			'startdate'=>'2007-09-01',
			'Adminisatrator'=>'2'
		]);
		DB::table('department')->insert([
			'name'=>'English',
			'budget'=>'350000',
			'startdate'=>'2007-09-01',
			'Adminisatrator'=>'6'
		]);
	}

}