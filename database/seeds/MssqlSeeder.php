<?php

use App\Mssql;
use Illuminate\Database\Seeder;

class MssqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mssql::class, 20)->create();
    }
}
