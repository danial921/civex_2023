<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\gec_team;

use Illuminate\Database\Seeder;

class GECSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 25) as $index) {
            $question = $faker->boolean(70) ? $faker->sentence : null; // 70% kemungkinan akan memiliki pertanyaan
            $answer = $question ? ($faker->boolean(70) ? $faker->sentence : null) : null; // jika ada pertanyaan, maka akan ada jawaban

            gec_team::create([
                'id_user' => $faker->numberBetween(1, 100), // contoh, bisa disesuaikan
                'nama_tim' => 'Tim ' . $faker->unique()->word,
                'institusi' => $faker->company,
                'alamat_institusi' => $faker->address,
                'dosen_pembimbing' => $faker->name,
                'ketua_nama' => $faker->name,
                'ketua_prodi' => $faker->word,
                'ketua_nim' => $faker->unique()->randomNumber(8),
                'ketua_notelp' => $faker->phoneNumber,
                'ketua_email' => $faker->unique()->safeEmail,
                'anggota1_nama' => $faker->name,
                'anggota1_prodi' => $faker->word,
                'anggota1_nim' => $faker->unique()->randomNumber(8),
                'anggota2_nama' => $faker->name,
                'anggota2_prodi' => $faker->word,
                'anggota2_nim' => $faker->unique()->randomNumber(8),
                'file_zip' => 'file' . $index . '.zip',
                'status_tim' => 'Status ' . $index,
                'aanwijzing_tanya' => $question,
                'aanwijzing_jawab' => $answer,
                'submission_proposal' => 'submission' . $index . '.pdf',
                'status_proposal' => $faker->numberBetween(0, 1),
                'bukti_bayar' => 'bukti' . $index . '.jpg',
            ]);
        }
    }
}
