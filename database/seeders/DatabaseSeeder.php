<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\analysis::factory(10)->create();
        \App\Models\partial_analysis::factory(40)->create();
        \App\Models\ana_partial_analysis::factory(50)->create();
        \App\Models\doctor::factory(20)->create();
        \App\Models\patient::factory(100)->create();
        \App\Models\medical_referral::factory(150)->create();
        \App\Models\department::factory(10)->create();
        \App\Models\employee::factory(20)->create();
        \App\Models\offer::factory(10)->create();
        \App\Models\material::factory(12)->create();
        \App\Models\offer_material::factory(100)->create();
        \App\Models\laboratory::factory(20)->create();
        \App\Models\material_laboratory::factory(10)->create();
        \App\Models\lab_ana_partial_analysis::factory(20)->create();
        \App\Models\analysis_demand::factory(100)->create();
       
        
        
      
     
   
        


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
