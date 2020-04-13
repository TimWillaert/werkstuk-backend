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
        $this->call(KeywordsTableSeeder::class);
        $this->call(SprekersTableSeeder::class);
        $this->call(SessiesTableSeeder::class);
        $this->call(PartnerTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
    }
}
