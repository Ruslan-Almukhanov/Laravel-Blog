<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagModel = Tag::create([
            'name' => 'Путешествие'
        ]);
        $tagModel = Tag::create([
            'name' => 'программирование'
        ]);
        $tagModel = Tag::create([
            'name' => 'хобби'
        ]);
        $tagModel = Tag::create([
            'name' => 'саморазвитие'
        ]);
        $tagModel = Tag::create([
            'name' => 'спорт'
        ]);
        $tagModel = Tag::create([
            'name' => 'семья'
        ]);

        $tagModel->save();
    }
}
