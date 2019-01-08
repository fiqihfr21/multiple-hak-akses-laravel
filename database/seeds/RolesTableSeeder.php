<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add role
        $roles = [
            [
                'name' => 'superadmin',
                'display_name' => 'Master',
                'description' => 'Hak akses untuk semua fitur',
            ],
            [
                'name' => 'gudang',
                'display_name' => 'Admin gudang terdaftar',
                'description' => 'Hak akses untuk fitur gudang',
            ],
            [
                'name' => 'penjualan',
                'display_name' => 'Admin penjualan terdaftar',
                'description' => 'Hak akses untuk fitur penjualan dan keuangan',
            ],
            [
                'name' => 'cs',
                'display_name' => 'Admin cs terdaftar',
                'description' => 'Hak akses untuk fitur cs',
            ],
        ];
        foreach ($roles as $key => $value) {
                    Role::create($value);
                }
        //add user
        $users = [
            [
                'name' => 'Master',
                'email' => 'superadmin@local.com',
                'password' => bcrypt('superadmin'),
            ],
            [
                'name' => 'Admin Gudang',
                'email' => 'gudang@local.com',
                'password' => bcrypt('gudang'),
            ],
            [
                'name' => 'Admin Penjualan',
                'email' => 'penjualan@local.com',
                'password' => bcrypt('penjualan'),
            ],
            [
                'name' => 'Admin CS',
                'email' => 'cs@local.com',
                'password' => bcrypt('cs1234'),
            ],
        ];
        $n=1;
        foreach ($users as $key => $value) {
            $user=User::create($value);
            $user->attachRole($n);
            $n++;
        }
    }
}
