<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class OpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('workshop_registrants')->insert([
                'nama' => $faker->name,
                'instansi' => $faker->company,
                'email' => $faker->unique()->safeEmail,
                'notelp' => $faker->phoneNumber,
                'bundle' => $faker->randomElement(['1', '2', '3']),
                'bukti_bayar' => Str::random(10) . '.png', // contoh nama file dummy
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 100; $i++) {
            DB::table('webinar_registrants')->insert([
                'nama' => $faker->name,
                'instansi' => $faker->company,
                'bukti_bayar' => Str::random(10) . '.png', // contoh nama file dummy
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
