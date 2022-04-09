<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'muaath',
            'email' => 'muaath@example.com',
            'phone_no' => '01128853086',
            'password' => Hash::make('password'),
        ]);
    }
}
