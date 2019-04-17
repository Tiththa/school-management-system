<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();
      foreach (range(1,5) as $index) {

         $job_title = $faker->randomElement($array = array('Admin','StudentAdmin'));
        // $role = $faker->randomElement($array = array('Teacher','Admin'));
      DB::table('admins')->insert([
          'name' =>$faker->name,
          'email' => $faker->unique()->safeEmail,
          'job_title' => $job_title,

          'password' => bcrypt('password'),
      ]);
    }
  }
}
