<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = strtoupper(md5("!@#!@#" . Carbon::now()->format('YmdH:i:s')));

        User::insert([
            [
              'id'              => $userId,
              'name'            => 'Ramadhan Rahman',
              'email'           => 'ramadhan@gmail.com',
              'password'        => bcrypt('password'),
              'role'            => 'petugas',
              'nip'             => '12345678',
              'created_at'      => Carbon::now(),
              'updated_at'      => Carbon::now()
            ]
        ]);
    }
}
