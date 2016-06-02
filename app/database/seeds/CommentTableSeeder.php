<?php

class CommentTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $sms = Sms::lists('id');
        $user = User::lists('id');
        for($i=0; $i<30; $i++)
        {
            $rand = array_rand($sms);
            Comment::create([
                'user_id' => rand(1,2),
                'sms_id' => ($rand == 0) ? 1 : $rand,
                'comment_content' => $faker->paragraphs(5, true),
                'comment_status' => 'DEACTIVE'
            ]);
        }
    }

}