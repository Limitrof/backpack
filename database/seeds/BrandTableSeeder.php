<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
			'title' => 'somelogotitle',
			'logo' => 'pathtologo',
			'descr' => 'aboutbrand',]);
    }
}
