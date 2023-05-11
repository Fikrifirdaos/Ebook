<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'fikri',
                'email' => 'fikri@admin.com',
                'password' => Hash::make('12108588'),
                'phone' => '08968281322',
                'address' => 'jalan kampung tapos',
                'IsAdmin' => true,
                // 'roles_id' => '1',
            ],
            [
                'username' => 'fikri',
                'email' => 'fikri@gmail.com',
                'password' => Hash::make('Muha8588'),
                'phone' => '08968281324',
                'address' => 'tapos',
                'IsAdmin' => false,
                // 'role_id' => '2',
            ],
        ]);
        

    }
}
