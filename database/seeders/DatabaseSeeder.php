<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sellbook;
use App\Models\requestbook;
use App\Models\Role;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            
        ]);
       
       
    }
}
