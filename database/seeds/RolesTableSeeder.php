<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert(
		  array(
                                array(
										'id' => 1,
										'title' => 'Водитель',
										'parent_id' =>null,
                                ),
                                array(
                                      'id' => 2,
									  'title' => 'Владелец СТО',
									  'parent_id' =>null,
                                ),
                                array(
                                      'id' => 3,
									  'title' => 'Механик СТО',
									  'parent_id' => 2,
                                ),
                               array(
                                      'id' => 4,
									  'title' => 'Менеджер СТО',
									  'parent_id' => 2,
                                ),
                               array(
                                      'id' => 5,
									  'title' => 'Генеральный представитель бренда',
									  'parent_id' => null,
                                ),
                               array(
                                      'id' => 6,
									  'title' => 'Представитель бренда',
									  'parent_id' => 5,
                                ),
                               array(
                                      'id' => 7,
									  'title' => 'Владелец магазина',
									  'parent_id' => null,
                                ),
                               array(
                                      'id' => 8,
									  'title' => 'Сотрудник магазина',
									  'parent_id' => 7,
                                ),
                               array(
                                      'id' => 9,
									  'title' => 'Генеральный дистрибьютор',
									  'parent_id' => null,
                                ),
                               array(
                                      'id' => 10,
									  'title' => 'Дистрибьютор',
									  'parent_id' => 9,
                                ),
                               array(
                                      'id' => 11,
									  'title' => 'Региональный дистрибьютор',
									  'parent_id' => 10,
                                ),
                        ));
    }
}
