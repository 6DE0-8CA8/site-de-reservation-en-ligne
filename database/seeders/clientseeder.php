<?php

namespace Database\Seeders;

use App\Models\client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'prenom' => 'joel',
                'email' => 'joel@gmail.com',
                'telephone' => '88888',
                'adresse' => 'bagon',
                'created'=>now(),
                'updated'=>now(),
            ],
            [
                'prenom' => 'theo',
                'email' => 'theo@gmail.com',
                'telephone' => '55555',
                'adresse' => 'bansoua',
                'created'=>now(),
                'updated'=>now(),
            ],
            [
                'prenom' => 'erico',
                'email' => 'erico@gmail.com',
                'telephone' => '555555',
                'adresse' => 'bazou',
                'created'=>now(),
                'updated'=>now(),
            ]
        ]);
    }
}
