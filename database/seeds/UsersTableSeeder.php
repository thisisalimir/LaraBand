<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Ceasar Grant MD',
            'email' => 'selena.barton@example.org',
            'email_verified_at' => '2020-03-04 15:36:18',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => 'T0pmbrPEKP',
        ]);
        \App\User::create([
            'name' => 'Taryn McLaughlin II',
            'email' => 'lura.kunze@example.org',
            'email_verified_at' => '2020-03-04 15:36:39',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => 'KLJRzuUxVf',
        ]);
    }
}
