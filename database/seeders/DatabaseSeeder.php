<?php

namespace Database\Seeders;

use App\Models\Cor;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Sistema',
            'email' => 'barraroot@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('idd20kfa06'), // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Monteiro',
            'email' => 'foxs.sbc11@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('leo123'), // password
            'remember_token' => Str::random(10),
        ]);

        Marca::create([
            'nome' => 'Volkswagen'
        ]);
        Marca::create([
            'nome' => 'Mercedes'
        ]);
        Marca::create([
            'nome' => 'Agrale'
        ]);
        Marca::create([
            'nome' => 'Iveco'
        ]);
        Marca::create([
            'nome' => 'Volvo'
        ]); 
        Marca::create([
            'nome' => 'Scania'
        ]); 
        
        Cor::create([
            'nome' => 'Branca'
        ]); 
        
        Cor::create([
            'nome' => 'Cinza'
        ]);         
        Cor::create([
            'nome' => 'Preta'
        ]);                 
    }
}
