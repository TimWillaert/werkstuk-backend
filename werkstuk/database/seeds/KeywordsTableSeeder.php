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
            'name' => 'Social Design'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Disruptive Design'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Stage Designer'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Cyborg'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Electronics'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Entrepreneur'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Author'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Graphic Design'
        ]);
        $keyword->save();
        $keyword = new Keyword([
            'name' => 'Typography'
        ]);
        $keyword->save();

    }
}
