<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MariadbSeeder::class);
         $this->call(MongodbSeeder::class);
         $this->call(MssqlSeeder::class);
         $this->call(MysqlSeeder::class);
         $this->call(PostgresqlSeeder::class);
    }
}
