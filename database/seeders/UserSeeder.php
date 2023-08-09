<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'id_user' => 1,
                'nama_tim' => $faker->company,
                'institusi' => $faker->randomElement(['ITS','IPB','UI','UNAIR', 'UDAYANA']),
                'alamat_institusi' => $faker->address,
                'dosen_pembimbing' => $faker->name,
                'ketua_nama' => $faker->name,
                'ketua_prodi' => $faker->jobTitle,
                'ketua_nim' => Str::random(10),
                'ketua_notelp' => $faker->phoneNumber,
                'ketua_email' => $faker->email,
                'anggota1_nama' => $faker->name,
                'anggota1_prodi' => $faker->jobTitle,
                'anggota1_nim' => Str::random(10),
                'anggota2_nama' => $faker->name,
                'anggota2_prodi' => $faker->jobTitle,
                'anggota2_nim' => Str::random(10),
                'file_zip' => 'https://www.google.com/',
                'status_tim' => $faker->randomElement(['00','01','1','12', '11','2','3']),
                'aanwijzing_tanya' => $faker->optional(0.3)->sentence,
                'aanwijzing_jawab' => null,
                'submission_proposal' => $faker->randomElement([null,'https://www.google.com/']),
                'status_proposal' => $faker->numberBetween(0,1),
                'bukti_bayar' => 'https://www.google.com/',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
            DB::table('cppc_teams')->insert([
                'id_user' => 1,
                'nama_tim' => $faker->company, 
                'institusi' => $faker->randomElement(['ITS','IPB','UI','UNAIR', 'UDAYANA']),
                'alamat_institusi' => $faker->address,
                'ketua_nama' => $faker->name,
                'ketua_prodi' => $faker->jobTitle, 
                'ketua_notelp' => $faker->phoneNumber,
                'ketua_email' => $faker->email,
                'ketua_nim' => Str::random(10),
                'ketua_ktm' => 'https://www.google.com/',
                'ketua_sk' => 'https://www.google.com/',
                'anggota1_nama' => $faker->name,
                'anggota1_prodi' => $faker->jobTitle,
                'anggota1_nim' => Str::random(10),
                'anggota1_notelp' => $faker->phoneNumber,
                'anggota1_email' => $faker->email,
                'anggota1_ktm' => 'https://www.google.com/',
                'anggota1_sk' => 'https://www.google.com/',
                'anggota2_nama' => $faker->name,
                'anggota2_prodi' => $faker->jobTitle,
                'anggota2_nim' => Str::random(10),
                'anggota2_notelp' => $faker->phoneNumber,
                'anggota2_email' => $faker->email,
                'anggota2_ktm' => 'https://www.google.com/',
                'anggota2_sk' => 'https://www.google.com/',
                'form_pendaftaran' => 'https://www.google.com/',
                'bukti_bayar' => 'https://www.google.com/',
                'status_tim' => $faker->randomElement(['00','01','1','12', '11','2','3']),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
            DB::table('cesc_teams')->insert([
                'id_user' => 1,
                'nama_tim' => $faker->company, 
                'sekolah' => $faker->randomElement(['SD','SMP','SMA']), 
                'ketua_nama' => $faker->name,
                'ketua_notelp' => $faker->phoneNumber,
                'ketua_kelas' => $faker->randomElement(['X','XI','XII']),
                'ketua_kartu' => 'https://www.google.com/',
                'ketua_foto' => 'https://www.google.com/',
                'ketua_follow' => 'https://www.google.com/',
                'ketua_twibbon' => 'https://www.google.com/',
                'anggota_nama' => $faker->name,
                'anggota_notelp' => $faker->phoneNumber,
                'anggota_kelas' => $faker->randomElement(['X','XI','XII']),
                'anggota_kartu' => 'https://www.google.com/',
                'anggota_foto' => 'https://www.google.com/',
                'anggota_follow' => 'https://www.google.com/',
                'anggota_twibbon' => 'https://www.google.com/',
                'bukti_bayar' => 'https://www.google.com/',
                'status_tim' => $faker->randomElement(['00','01','1', '12', '11','2','3']),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
            
        }

        
    }
}
