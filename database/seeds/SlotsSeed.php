<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SlotsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Slots::create([
            'name' => str_random(10),
            'type' =>  str_random(10),
            'description' => str_random(100),
            'booking' => date("Y-m-d H:i:s"),
            'company_id' => 1,
        ]);
    }
}
