<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appartement;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $u = new User;
        $u->name = "Houss";
        $u->email = "housseyn69@outlook.fr";
        $u->password = Hash::make("houss");
        $u->is_proprietaire = true;
        $u->is_client = false;
        $u->save();

        $u = new User;
        $u->name = "Hass";
        $u->email = "alhousseyni.ndiaye@outlook.fr";
        $u->password = Hash::make("houss");
        $u->is_proprietaire = false;
        $u->is_client = true;
        $u->save();


        $this->call([
            AppartementSeeder::class,
            
        ]);
    }
}
