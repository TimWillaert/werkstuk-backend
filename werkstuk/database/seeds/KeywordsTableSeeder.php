<?php

use App\Keyword;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $keyword = new Keyword([
            'name' => 'Artist'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Speaker'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Concept Providor'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Lecturer'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Abstract'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Prize Winner'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Stage Designer'
        ]);
        $keyword->save();

    }
}
