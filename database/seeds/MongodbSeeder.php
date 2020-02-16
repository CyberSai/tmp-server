<?php

use Illuminate\Database\Seeder;
use App\Mongodb;

class MongodbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mongodb::class, 20)->create();
    }
}
