<?php
namespace Faker\Provider;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $faker = Faker::create();
      foreach (range(1,10) as $index) {

        $category = $faker->randomElement($array = array('Science Fiction','Non Fiction'));

      DB::table('books')->insert([
          'name' =>$faker->text,
          'category' => $category,
          'author' => $faker->name,
          'summary' => $faker->text ,


      ]);
    }
    }
}
