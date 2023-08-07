<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\Unique;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $kode_outlet = ['TAH', 'GTS', 'ASA'];
        $outlet = ['T. Amir Hamzah', 'Gatot Subroto', 'Asia'];
        for ($j = 0; $j < 10; $j++) {
            for ($i = 0; $i < count($kode_outlet); $i++) {
                $unik = Str::random(5);

                $karyawan = new Karyawan;
                $karyawan->uid_karyawan = $unik;
                $karyawan->kode_outlet = $kode_outlet[$i];
                $karyawan->nama_karyawan = $faker->name;
                $karyawan->penempatan = $outlet[$i];
                $karyawan->domisili = $faker->city;
                $karyawan->posisi = $faker->jobTitle;
                $karyawan->t_masuk = $faker->date;
                $karyawan->t_lahir = $faker->date;
                $karyawan->no_hp = $faker->phoneNumber;
                $karyawan->poto = 'poto.jpg';
                $karyawan->save();

                // Unggah foto
            }
        }
    }
}
