<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'activated' => true,
            'is_admin' => true,
            'password'=>password_hash('123456789',PASSWORD_DEFAULT)
        ];
        (new User($admin))->save();
        User::factory()->count(30)->create();
    }
}
