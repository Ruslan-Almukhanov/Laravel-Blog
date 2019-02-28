<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Menu::create([
            'caption' => 'Главная',
            'link' => '/',
            'weight' => '100',
            'parent_id' => NULL
        ]);

        \App\Models\Menu::create([
            'caption' => 'Обо мне',
            'link' => '/about',
            'weight' => '101',
            'parent_id' => NULL
        ]);

        \App\Models\Menu::create([
            'caption' => 'Аутентификация',
            'link' => '/auth',
            'weight' => '102',
            'parent_id' => NULL
        ]);

        \App\Models\Menu::create([
            'caption' => 'Регистрация',
            'link' => '/registration',
            'weight' => '103',
            'parent_id' => '3'
        ]);

        \App\Models\Menu::create([
            'caption' => 'Вход',
            'link' => '/sign-in',
            'weight' => '104',
            'parent_id' => '3'
        ]);
    }
}
