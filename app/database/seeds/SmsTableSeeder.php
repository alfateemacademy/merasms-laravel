<?php

class SmsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = Category::lists('id');
        for($i=0; $i<50; $i++)
        {
            $title = $faker->sentence;
            $rand = array_rand($categories);
            Sms::create([
                'category_id' => ($rand == 0) ? 1 : $rand,
                'title' => $title,
                'slug' => Str::slug($title),
                'type' => 'text',
                'sms_content' => $faker->paragraph(8),
                'sms_status' => 'ACTIVE',
                'views' => $faker->randomDigit
            ]);
        }
    }

}