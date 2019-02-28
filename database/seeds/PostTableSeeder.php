<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $postModel = Post::create([
                'title' => $faker->realText(50),
                'slug' => sha1(str_random(16) .microtime(true)),
                'preview' => $faker->realText(300),
                'content' => $faker->realText(1024),
                'image' => 'https://picsum.photos/1200/720?random',
                'user_id' => 1
            ]);

            $postModel->slug = $postModel->id . ':' . str_slug($postModel->title, '-');
            $postModel->save();
        }
    }
}
