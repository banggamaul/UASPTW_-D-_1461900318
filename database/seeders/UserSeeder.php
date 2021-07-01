<?php

namespace Database\Seeders;
use App\Models\User;//model table users
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Bangga Maulid Afandi';
        $inputan['email'] = 'bangga@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('123');//passwordnya 123
        $inputan['phone'] = '0851231231';
        $inputan['alamat'] = 'manyar Kulon Rt 03 Rw 05';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
