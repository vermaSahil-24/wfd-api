<?php

use Illuminate\Database\Seeder;
// use Illuminate\Foundation\Auth\User;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(['email' => 'admin@test.com']);

        factory(User::class, 50)->create();
    }
}
