<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSedeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'teste',
            'email'=>'teste@gmail.com',
            'ramal'=>'9999',
            'unidade_setor'=>'ribeira\NTI',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
