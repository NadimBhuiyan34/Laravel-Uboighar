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
        User::create([
            'name'=>'Nadim Bhuiyan',
            'role_id'=>1,
            'email'=>'nadim2513@student.nstu.edu.bd',
            'password' => Hash::make('12345678'),
            
         ]);
    }
}
