<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(0, 9) as $_) {
            $faker = Faker::create();
            DB::table('companies')->insert([
                'name' => $faker->company,
                'email' => $faker->email,
                'phone_number' => $faker->e164PhoneNumber,
            ]);
        }

        foreach(range(1, 10) as $i) {
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('12345678'),
            'company_id' => $i,
        ]);
        }
        foreach(range(1, 10) as $i) {
            DB::table('employees')->insert([
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'age' => rand(18, 99),
            'company_id' => $i,
        ]);
        }
    }
}