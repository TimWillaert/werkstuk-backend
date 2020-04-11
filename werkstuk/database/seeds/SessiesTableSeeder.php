<?php

use App\Sessie;
use App\Spreker;
use Illuminate\Database\Seeder;

class SessiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $session = new Sessie([
            'title' => 'Artifical Intelligence on Social Media',
            'description' => 'Discover how AI is used on modern social media platforms.',
            'date' => '2020-10-02',
            'time_start' => '10:00:00',
            'time_end' => '11:00:00',
            'location' => 'Hall H'
        ]);
        $speaker = Spreker::find(1);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'Sculpting Anno 2020',
            'description' => 'Follow along with this live sculpting session by one of our experts.',
            'date' => '2020-10-02',
            'time_start' => '11:00:00',
            'time_end' => '12:00:00',
            'location' => 'Hall F'
        ]);
        $speaker = Spreker::find(2);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'Listening to color',
            'description' => 'Neil Harbisson tells his emotional story in an inspiring way.',
            'date' => '2020-10-02',
            'time_start' => '13:00:00',
            'time_end' => '14:00:00',
            'location' => 'Hall C'
        ]);
        $speaker = Spreker::find(3);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'Graphic Design & Typography for dummies',
            'description' => 'Your design (probably) sucks. Let one of our experts help you.',
            'date' => '2020-10-02',
            'time_start' => '14:00:00',
            'time_end' => '15:00:00',
            'location' => 'Hall A'
        ]);
        $speaker = Spreker::find(4);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'Disruptive Design',
            'description' => 'Learn how to disrupt the market, or even society, with your innovative designs.',
            'date' => '2020-10-02',
            'time_start' => '15:30:00',
            'time_end' => '16:30:00',
            'location' => 'Hall H'
        ]);
        $speaker = Spreker::find(5);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'Why Running A Studio is a Design Challenge',
            'description' => 'Designing is one thing. Running a design studio is another. How do you combine the two?',
            'date' => '2020-10-02',
            'time_start' => '16:00:00',
            'time_end' => '17:00:00',
            'location' => 'Hall D'
        ]);
        $speaker = Spreker::find(6);
        $speaker->sessions()->save($session);

        $session = new Sessie([
            'title' => 'This Is Marketing',
            'description' => "You can't be seen until you learn to see.",
            'date' => '2020-10-02',
            'time_start' => '17:00:00',
            'time_end' => '18:00:00',
            'location' => 'Hall A'
        ]);
        $speaker = Spreker::find(7);
        $speaker->sessions()->save($session);
    }
}
