<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();
      foreach (range(1,20) as $index) {

        $department = $faker->randomElement($array = array('Admin','Student'));
        $role = $faker->randomElement($array = array('Teacher','Admin','Librarian','Student','Accountant','Alumni'));
      DB::table('users')->insert([
          'name' =>$faker->name,
          'email' => $faker->unique()->safeEmail,
          'department' => $department,
          'role' => $role,
          'password' => bcrypt('password'),
      ]);
    }
  }
}
