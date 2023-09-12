<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\cpcc_team;

use Illuminate\Database\Seeder;

class CPCCSeeder extends Seeder
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
            $question = $faker->boolean(70) ? $faker->sentence : null;
            $answer = $question ? ($faker->boolean(70) ? $faker->sentence : null) : null;

            cpcc_team::create([
                'id_user' => $faker->numberBetween(1, 100),
                'nama_tim' => 'Tim ' . $faker->unique()->word,
                'institusi' => $faker->company,
                'alamat_institusi' => $faker->address,
                'ketua_nama' => $faker->name,
                'ketua_prodi' => $faker->word,
                'ketua_nim' => $faker->unique()->randomNumber(8),
                'ketua_email' => $faker->unique()->safeEmail,
                'ketua_notelp' => $faker->phoneNumber,
                'ketua_ktm' => 'ktm' . $index . '.jpg',
                'ketua_sk' => 'sk' . $index . '.pdf',
                'anggota1_nama' => $faker->name,
                'anggota1_prodi' => $faker->word,
                'anggota1_nim' => $faker->unique()->randomNumber(8),
                'anggota1_email' => $faker->unique()->safeEmail,
                'anggota1_notelp' => $faker->phoneNumber,
                'anggota1_ktm' => 'ktm1' . $index . '.jpg',
                'anggota1_sk' => 'sk1' . $index . '.pdf',
                'anggota2_nama' => $faker->name,
                'anggota2_prodi' => $faker->word,
                'anggota2_nim' => $faker->unique()->randomNumber(8),
                'anggota2_email' => $faker->unique()->safeEmail,
                'anggota2_notelp' => $faker->phoneNumber,
                'anggota2_ktm' => 'ktm2' . $index . '.jpg',
                'anggota2_sk' => 'sk2' . $index . '.pdf',
                'form_pendaftaran' => 'form' . $index . '.pdf',
                'status_tim' => $faker->word,
                'submission_proposal' => 'submission' . $index . '.pdf',
                'status_proposal' => $faker->numberBetween(0, 1),
                'aanwijzing_tanya' => $question,
                'aanwijzing_jawab' => $answer,
                'bukti_bayar' => 'bukti' . $index . '.jpg',
            ]);
        }
    }
}
