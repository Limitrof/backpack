<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserroleTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(TCDcarTableSeeder::class);
        $this->call(ServicebookTableSeeder::class);
    }
}
