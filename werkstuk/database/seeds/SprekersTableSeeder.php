<?php

use App\Spreker;
use Illuminate\Database\Seeder;

class SprekersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spreker = new Spreker([
            'name' => 'Dries Depoorter',
            'description' => 'Dries Depoorter is a Belgium artist that handles themes as privacy, artificial intelligence, surveillance & social media. Depoorter creates interactive installations, apps, games.
            Depoorter exhibited internationally at the Barbican, MUTEK Festival, Art Basel, Bozar, Para Site Hong Kong, Mozilla – The Glass Room San Francisco, HEK Basel, WIRED, IDFA Doclab, Mundaneum, FOMU, Ars Electronica, Athens Digital Art Festival, Art Soutterain, STRP festival, Heidelberger Kunstverein.',
            'website' => 'https://driesdepoorter.be/'
        ]);
        $spreker->save();
    }
}
