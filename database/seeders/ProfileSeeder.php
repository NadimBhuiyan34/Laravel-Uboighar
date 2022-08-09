<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'image'=>'profile.jpg',
            'user_id'=>1,
            
         ]);
    }
}
