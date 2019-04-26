<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::create([

            'name' => str_random(10),
            'email' => str_random(10).'@cliente.com',
            'birth' => date("Y-m-d H:i:s"),
            'password' => bcrypt('secret'),
            'company_id' => 1,

        ]);
    }
}
