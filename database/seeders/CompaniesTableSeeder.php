<?php

namespace Database\Seeders;
use App\Models\Companies;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();

        for ($i=0;$i<=20;$i++);{
            Companies::create([
                'name' => $faker->name,
                'description' => $faker->company,
                'nit' => $faker->companySuffix,
                'phone' => $faker->phoneNumber,
            ]);
    }
    }
}
