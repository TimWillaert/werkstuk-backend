<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket = new Ticket([
            'name' => 'Early Bird',
            'description' => 'Cheaper tickets for those who order early!',
            'price' => 45.00,
            'amount' => 150,
            'open' => true
        ]);
        $ticket->save();
        $ticket = new Ticket([
            'name' => 'Standard',
            'description' => 'Standard ticket.',
            'price' => 90.00,
            'amount' => 200,
            'open' => false
        ]);
        $ticket->save();
        $ticket = new Ticket([
            'name' => 'All-In',
            'description' => 'Includes free drinks and food, and enjoys other major benefits.',
            'price' => 250.00,
            'amount' => 100,
            'open' => true
        ]);
        $ticket->save();
    }
}
