<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        /*--------Create Super Admin--------*/
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        /*--------Create Interviewee --------*/
        User::create([
            'name' => 'Interviewee',
            'email' => 'interviewee@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        /*--------Create Interviewee --------*/
        User::create([
            'name' => 'Interviewer',
            'email' => 'interviewer@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
