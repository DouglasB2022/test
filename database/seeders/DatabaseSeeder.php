<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\Operadora;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Funcionario::create([
            'nome' => 'Joao',
            'cpf' => '111111'
        ]);

        Funcionario::create([
            'nome' => 'Jose',
            'cpf' => '222222'
        ]);

        Funcionario::create([
            'nome' => 'Paulo',
            'cpf' => '33333'
        ]);

        Operadora::create([
            'cnpj' => '11111111',
            'nome' => 'Visa'
        ]);

        Operadora::create([
            'cnpj' => '22222222',
            'nome' => 'Master'
        ]);

        Operadora::create([
            'cnpj' => '333333333',
            'nome' => 'Elo'
        ]);


    }
}
