<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'surya_dnrt',
            'picture' => '1.jpg',
            'email' => 'suryadinarta8@gmail.com',
            'birth' => '2003-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
        $user = User::create([
            'name' => 'Stephen',
            'username' => 'Stephen',
            'picture' => '2.jpg',
            'email' => 'test2@gmail.com',
            'birth' => '2002-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
        $user = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'surya_dnrt',
            'picture' => '3.jpg',
            'email' => 'test3@gmail.com',
            'birth' => '2007-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
        $user = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'surya_dnrt',
            'picture' => '4.jpg',
            'email' => 'test4@gmail.com',
            'birth' => '1998-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
        $user = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'surya_dnrt',
            'picture' => '5.jpg',
            'email' => 'test5@gmail.com',
            'birth' => '2000-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
        $user = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'surya_dnrt',
            'picture' => '6.jpg',
            'email' => 'test6@gmail.com',
            'birth' => '2010-02-12',
            'address' => 'Jl Sukasenang, Bandung Barat',
            'fav_sport' => 'Futsal, Basket, Badminton',
            'password' => bcrypt('password'),
            'register_stage' => 'done',
        ]);
    }
}
