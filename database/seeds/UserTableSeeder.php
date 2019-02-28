<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'email' => 'admin@gmail.com',
            'password' => password_hash('12345678',PASSWORD_ARGON2I)
        ]);
    }
}
