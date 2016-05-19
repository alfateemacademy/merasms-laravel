<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<10; $i++)
        {
            $title = $faker->sentence( rand(3, 10) );
            Category::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'category_status' => 'ACTIVE'
            ]);
        }
    }

}