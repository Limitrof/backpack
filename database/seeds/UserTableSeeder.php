<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'id' => 1,
                    'name' => 'zdan',
                    'email' =>'zdan@bk.ru',
                    'password' =>'$2y$10$inkhbly7N9iTEYeoiNs4VeCm8HxhWqkPZnKust17qHkU3rkBNEkLO',
                ),                
                array(
                    'id' => 2,
                        'name' => 'distributor1',
                        'email' =>'distributor1@bk.ru',
                        'password' =>'$2y$10$inkhbly7N9iTEYeoiNs4VeCm8HxhWqkPZnKust17qHkU3rkBNEkLO',
                    ),                    
                array(
                    'id' => 3,
                    'name' => 'sto1',
                    'email' =>'sto1@bk.ru',
                    'password' =>'$2y$10$inkhbly7N9iTEYeoiNs4VeCm8HxhWqkPZnKust17qHkU3rkBNEkLO',
                ),
                array(
                    'id' => 4,
                    'name' => 'brandowner1',
                    'email' =>'brandowner1@bk.ru',
                    'password' =>'$2y$10$inkhbly7N9iTEYeoiNs4VeCm8HxhWqkPZnKust17qHkU3rkBNEkLO',
                ),
                array(
                    'id' => 5,
                    'name' => 'driver1',
                    'email' =>'driver1@bk.ru',
                    'password' =>'$2y$10$inkhbly7N9iTEYeoiNs4VeCm8HxhWqkPZnKust17qHkU3rkBNEkLO',
                ),
               /* array(
                    'id' => 2,
                    'title' => 'Владелец СТО',
                    'parent_id' =>null,
                ),*/
            ));
    }
}
