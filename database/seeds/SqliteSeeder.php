<?php

use App\Sqlite;
use Illuminate\Database\Seeder;

class SqliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sqlite::class, 20)->create();
    }
}
