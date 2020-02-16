<?php

use App\Postgresql;
use Illuminate\Database\Seeder;

class PostgresqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Postgresql::class, 20)->create();
    }
}
