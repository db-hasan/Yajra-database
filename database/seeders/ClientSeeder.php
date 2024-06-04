<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 1000; $i++) { 
            $client = new Client;
            $client->name = $faker->name;
            $client->email = $faker->email;
            $client->number = $faker->phoneNumber;
            $client->address = $faker->address;
            $client->save();
        }
    }
}
