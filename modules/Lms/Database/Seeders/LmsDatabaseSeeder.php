<?php namespace Modules\Lms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LmsDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		//$this->call(PersonTableSeeder::class);
		//$this->call(DepartmentTableSeeder::class);
		//$this->call(CourseTableSeeder::class);
		//$this->call(OnlinecourseTableSeeder::class);
		//$this->call(OnsitecourseTableSeeder::class);
		//$this->call(CourseinstructorTableSeeder::class);
		//$this->call(OfficeassignmentTableSeeder::class);
		$this->call(StudentgradeTableSeeder::class);





	}

}