<?php

use App\Image;
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
            'website' => 'https://driesdepoorter.be/',
            'profilepicname' => 'driesdepoorter.png',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/driesdepoorter.png')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'driesdepoorter1.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/driesdepoorter1.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'driesdepoorter2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/driesdepoorter2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'driesdepoorter3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/driesdepoorter3.jpg')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Es Devlin',
            'description' => 'Es Devlin is an artist and stage designer. She is known for creating large-scale performative sculptures and environments that fuse music, language and light. Devlin has conceived touring stage sculptures for Beyoncé, U2, Adele, The Weeknd and Kanye West as well as two decades of opera, drama and dance worldwide.',
            'website' => 'https://esdevlin.com/',
            'profilepicname' => 'esdevlin.jpg',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/esdevlin.jpg')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'esdevlin1.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/esdevlin1.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'esdevlin2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/esdevlin2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'esdevlin3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/esdevlin3.jpg')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Neil Harbisson',
            'description' => 'Neil Harbisson is a Catalan-raised, British-born contemporary artist and cyborg activist best known for having an antenna implanted in his skull and for being officially recognised as a cyborg by a government. The antenna allows him to perceive visible and invisible colours via audible vibrations in his skull including infrareds and ultraviolets as well as receive colours from space, images, videos, music or phone calls directly into his head via internet connection.',
            'website' => 'https://www.cyborgarts.com/',
            'profilepicname' => 'neilharbisson.jpg',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/neilharbisson.jpg')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'neilharbisson1.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilharbisson1.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'neilharbisson2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilharbisson2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'neilharbisson3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilharbisson3.jpg')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Stefan Sagmeister',
            'description' => 'Stefan Sagmeister is a New York-based graphic designer, storyteller, and typographer. Sagmeister co-founded a design firm called Sagmeister & Walsh Inc. with Jessica Walsh in New York City. He has designed album covers for Lou Reed, OK Go, The Rolling Stones, David Byrne, Jay Z, Aerosmith and Pat Metheny.',
            'website' => 'https://sagmeister.com/',
            'profilepicname' => 'stefansagmeister.jpg',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/stefansagmeister.jpg')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'stefansagmeister1.png',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/stefansagmeister1.png')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'stefansagmeister2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/stefansagmeister2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'stefansagmeister3.png',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/stefansagmeister3.png')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Neil Mendoza',
            'description' => 'Neil Mendoza’s work combines sculpture, electronics and software to bring inanimate objects and spaces to life. By decontextualizing objects with technology and vice versa, the constituent parts of his work can be looked at in a new ways. Using this medium, he explores themes of the absurd, the humorous, the futile and the surreal. He has an MA in math and computer science from Oxford University and an MFA in design media art from UCLA and has taught classes on art and technology at Stanford and UCLA.',
            'website' => 'http://www.neilmendoza.com/',
            'profilepicname' => 'neilmendoza.png',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/neilmendoza.png')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'neilmendoza1.jpeg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilmendoza1.jpeg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'neilmendoza2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilmendoza2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'neilmendoza3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/neilmendoza3.jpg')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Daan Roosegaarde',
            'description' => 'We are pioneers for the liveability of our future landscapes. Clean air, clean water, clean energy, and now clean space are our new values. As social design lab, Dutch artist and innovator Daan Roosegaarde and his team of designers and engineers connect people and technology in artworks that improve daily life in urban environments, spark imagination and fight climate crisis.',
            'website' => 'https://www.studioroosegaarde.net/',
            'profilepicname' => 'daanroosegaarde.jpg',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/daanroosegaarde.jpg')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'daanroosegaarde1.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/daanroosegaarde1.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'daanroosegaarde2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/daanroosegaarde2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'daanroosegaarde3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/daanroosegaarde3.jpg')))
        ]);
        $spreker->images()->save($img);

        $spreker = new Spreker([
            'name' => 'Seth Godin',
            'description' => "Seth is an entrepreneur, best-selling author, and speaker. In addition to launching one of the most popular blogs in the world, he has written 19 best-selling books, including The Dip, Linchpin, Purple Cow, Tribes, and What To Do When It's Your Turn (And It's Always Your Turn). His most recent book, This is Marketing, was an instant bestseller in countries around the world.",
            'website' => 'https://www.sethgodin.com/',
            'profilepicname' => 'sethgodin.jpeg',
            'profilepic' => base64_encode(file_get_contents(storage_path('app/public/profilepics/sethgodin.jpeg')))
        ]);
        $spreker->save();
        $img = new Image([
            'name' => 'sethgodin1.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/sethgodin1.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'sethgodin2.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/sethgodin2.jpg')))
        ]);
        $spreker->images()->save($img);
        $img = new Image([
            'name' => 'sethgodin3.jpg',
            'src' => base64_encode(file_get_contents(storage_path('app/public/keyimages/sethgodin3.jpg')))
        ]);
        $spreker->images()->save($img);
    }
}
