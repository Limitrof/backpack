<?php

use Illuminate\Database\Seeder;

class TCDcarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tcd_cars')->insert(
            array(
                array(
                    'id' => 1,
                    //'vin' => 'WDB1240521C250831', mersedes
                    'model' => '124.052',
                    'brand_id' => 1,
                    'year' => '2001',
                ),
                array(
                    'id' => 2,
                    //'vin' => 'WF0JXXGAJJAM14991', fiat
                    'model' => 'Series 30',
                    'brand_id' => 2,
                    'year' => '2010',
                ),
            ));
    }
}
