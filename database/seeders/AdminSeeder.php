<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'id' => 1,
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'username' => 'admin'
        ]);
    }
}
