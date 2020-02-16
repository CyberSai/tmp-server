<?php

use App\Mariadb;
use Illuminate\Database\Seeder;

class MariadbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mariadb::class, 20)->create();
    }
}
