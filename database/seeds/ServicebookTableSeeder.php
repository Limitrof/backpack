<?php

use Illuminate\Database\Seeder;

class ServicebookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_books')->insert(
            array(
                array(
                    'user_id' => 5,
                    'vin' => 'WDB1240521C250831',
                    'gos_number' => 'AA 57 30 OP',
                    'tcd_car_id' => '1',
                ),
                array(
                    'user_id' => 5,
                    'vin' => 'WF0JXXGAJJAM14991',
                    'gos_number' => 'XX 06 06 XX',
                    'tcd_car_id' => '2',
                ),
            ));
    }
}
