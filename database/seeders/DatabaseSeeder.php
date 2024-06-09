<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use App\Models\Pegawai;
use App\Models\Pejabat;
use App\Models\User;
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
        User::create([
            'username' => 'Admin',
            'password' => bcrypt('12345'),
            'role' => 'admin',
        ]);
        User::create([
            'username' => 'Pejabat',
            'password' => bcrypt('12345'),
            'role' => 'pejabat',
        ]);
        Pegawai::create([
            'nama_pegawai' => 'Pegawai 1',
            'tanggal_lahir' => '1970-08-17',
            'status' => 1,
            'created_by' => 'system',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        Pegawai::create([
            'nama_pegawai' => 'Pegawai 2',
            'tanggal_lahir' => '1970-08-17',
            'status' => 1,
            'created_by' => 'system',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        Pejabat::create([
            'nama_pejabat' => 'Pejabat 1',
            'jabatan' => 'Direktur',
            'status' => 1,
            'dinas' => 'pusat',
            'created_by' => 'system',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        Pejabat::create([
            'nama_pejabat' => 'Pejabat 2',
            'jabatan' => 'Direktur',
            'status' => 1,
            'dinas' => 'cabang',
            'created_by' => 'system',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
