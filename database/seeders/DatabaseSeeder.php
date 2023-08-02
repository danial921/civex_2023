<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) { // Membuat 50 entri
            DB::table('gec_teams')->insert([
                'nama_tim' => $faker->company,
                'institusi' => $faker->randomElement(['ITS','IPB','UI','UNAIR', 'UDAYANA']),
                'alamat_institusi' => $faker->address,
                'dosen_pembimbing' => $faker->name,
                'ketua_nama' => $faker->name,
                'ketua_prodi' => $faker->jobTitle,
                'ketua_nim' => Str::random(10),
                'ketua_notelp' => $faker->phoneNumber,
                'anggota1_nama' => $faker->name,
                'anggota1_prodi' => $faker->jobTitle,
                'anggota1_nim' => Str::random(10),
                'anggota2_nama' => $faker->name,
                'anggota2_prodi' => $faker->jobTitle,
                'anggota2_nim' => Str::random(10),
                'file_zip' => 'https://www.google.com/',
                'status_tim' => $faker->randomElement(['0','01','1', '11','2','3']),
                'aanwijzing_tanya' => $faker->optional(0.3)->sentence,
                'aanwijzing_jawab' => null,
                'submission_proposal' => $faker->randomElement([null,'https://www.google.com/']),
                'status_proposal' => $faker->numberBetween(0,1),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
