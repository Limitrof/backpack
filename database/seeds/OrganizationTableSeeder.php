<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert(
            array(
                array(
                    'id' => 1,
                    'title' => 'Distributor1 Organisation',
                    'phone' => '222-22-22',
                    'logo' => 'uploads\Quod.png',
                    'user_id' => 2,
                ),
                array(
                    'id' => 2,
                    'title' => 'STO1 Organisation',
                    'phone' => '333-33-33',
                    'logo' => 'uploads\404.gif',
                    'user_id' => 3,
                ),
                array(
                    'id' => 3,
                    'title' => 'BrandOwner1 Organisation',
                    'phone' => '444-44-44',
                    'logo' => 'uploads\404.gif',
                    'user_id' => 4,
                ),
            ));
    }
}
