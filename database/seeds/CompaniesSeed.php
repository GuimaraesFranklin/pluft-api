<?php

use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Company::create([
            'name' => str_random(10),
            'email' => str_random(10).'@teste.com',
            'password' => bcrypt('secret'),
            'address' => str_random(10),
            'city' => str_random(10),
            'district' => str_random(40),
            'uf' => str_random(2),
            'cnpj' => str_random(14),
            'logo' => str_random(10),
        ]);
    }
}
