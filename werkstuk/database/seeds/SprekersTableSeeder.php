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
            'description' => 'Dries Depoorter is a Belgium artist that handles themes as privacy, artificial intelligence, surveillance & social media. Depoorter creates interactive installations, apps, games. Depoorter exhibited internationally at the Barbican, MUTEK Festival, Art Basel, Bozar, Para Site Hong Kong, Mozilla – The Glass Room San Francisco, HEK Basel, WIRED, IDFA Doclab, Mundaneum, FOMU, Ars Electronica, Athens Digital Art Festival, Art Soutterain, STRP festival, Heidelberger Kunstverein.',
            'website' => 'https://driesdepoorter.be/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Es Devlin',
            'description' => 'ES DEVLIN IS AN ARTIST AND STAGE DESIGNER. SHE IS KNOWN FOR CREATING LARGE-SCALE PERFORMATIVE SCULPTURES AND ENVIRONMENTS THAT FUSE MUSIC, LANGUAGE AND LIGHT. DEVLIN HAS CONCEIVED TOURING STAGE SCULPTURES FOR BEYONCÉ, U2, ADELE, THE WEEKND AND KANYE WEST AS WELL AS TWO DECADES OF OPERA, DRAMA AND DANCE WORLDWIDE.',
            'website' => 'https://esdevlin.com/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Neil Harbisson',
            'description' => 'Neil Harbisson is a Catalan-raised, British-born contemporary artist and cyborg activist best known for having an antenna implanted in his skull and for being officially recognised as a cyborg by a government. The antenna allows him to perceive visible and invisible colours via audible vibrations in his skull including infrareds and ultraviolets as well as receive colours from space, images, videos, music or phone calls directly into his head via internet connection.',
            'website' => 'https://www.cyborgarts.com/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Stefan Sagmeister',
            'description' => 'Stefan Sagmeister is a New York-based graphic designer, storyteller, and typographer. Sagmeister co-founded a design firm called Sagmeister & Walsh Inc. with Jessica Walsh in New York City. He has designed album covers for Lou Reed, OK Go, The Rolling Stones, David Byrne, Jay Z, Aerosmith and Pat Metheny.',
            'website' => 'https://sagmeister.com/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Neil Mendoza',
            'description' => 'Neil Mendoza’s work combines sculpture, electronics and software to bring inanimate objects and spaces to life. By decontextualizing objects with technology and vice versa, the constituent parts of his work can be looked at in a new ways. Using this medium, he explores themes of the absurd, the humorous, the futile and the surreal. He has an MA in math and computer science from Oxford University and an MFA in design media art from UCLA and has taught classes on art and technology at Stanford and UCLA.',
            'website' => 'http://www.neilmendoza.com/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Daan Roosegaarde',
            'description' => 'We are pioneers for the liveability of our future landscapes. Clean air, clean water, clean energy, and now clean space are our new values. As social design lab, Dutch artist and innovator Daan Roosegaarde and his team of designers and engineers connect people and technology in artworks that improve daily life in urban environments, spark imagination and fight climate crisis.',
            'website' => 'https://www.studioroosegaarde.net/'
        ]);
        $spreker->save();

        $spreker = new Spreker([
            'name' => 'Seth Godin',
            'description' => "Seth is an entrepreneur, best-selling author, and speaker. In addition to launching one of the most popular blogs in the world, he has written 19 best-selling books, including The Dip, Linchpin, Purple Cow, Tribes, and What To Do When It's Your Turn (And It's Always Your Turn). His most recent book, This is Marketing, was an instant bestseller in countries around the world.",
            'website' => 'https://www.sethgodin.com/'
        ]);
        $spreker->save();
    }
}
