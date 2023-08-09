<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'AdminCivex2023',
            'email' => 'civilexpoits.dev@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('civex2023jayajayajaya'),
            'no_telp' => '123',
            'is_admin' => true,
            'status'    => '-',
            'status_comp' => '-'
        ]);
    }
}
