<?php

use App\Mysql;
use Illuminate\Database\Seeder;

class MysqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mysql::class, 20)->create();
    }
}
