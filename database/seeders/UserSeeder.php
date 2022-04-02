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
        // $data = array(
        //     [
        //         'name'      => 'Admin',
        //         'email'     => 'admin@adimitraperdana.com',
        //         'password'  => Hash::make('admin'),
        //     ],
        // );

        // DB::table('users')->insert($data);

        $admin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@adimitraperdana.com',
            'password'  => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name'      => 'User',
            'email'     => 'user@adimitraperdana.com',
            'password'  => Hash::make('user'),
        ]);
        $user->assignRole('user');
    }
}
