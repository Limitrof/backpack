<?php

use Illuminate\Database\Seeder;

class UserroleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
            array(
                array(
                    'user_id' => 1,
                    'role_id' => 1,
                ),
                array(
                    'user_id' => 1,
                    'role_id' => 42,
                ),
                array(
                    'user_id' => 5,
                    'role_id' => 1,
                ),
            ));
    }
}
