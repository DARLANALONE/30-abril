<?php

namespace Database\Seeders;
use App\Models\Employeed;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0;$i<20;$i++){
            Employeed::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->domainName,
                'email' => $faker->email,
                'gender' => $faker->userAgent,
            ]);
        }
    }
}


