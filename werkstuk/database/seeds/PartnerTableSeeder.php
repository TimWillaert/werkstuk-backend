<?php

use App\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner = new Partner([
            'name' => 'Bozar',
            'type' => 'Partner',
            'level' => 'Gold',
            'website' => 'https://www.bozar.be/',
            'imgname' => 'bozar.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/bozar.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Erasmushogeschool Brussel',
            'type' => 'Partner',
            'level' => 'Gold',
            'website' => 'https://www.erasmushogeschool.be/',
            'imgname' => 'ehb.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/ehb.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Brussel Stad',
            'type' => 'Partner',
            'level' => 'Gold',
            'website' => 'https://www.brussel.be/',
            'imgname' => 'bxl.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/bxl.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Imec',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.imec.be/',
            'imgname' => 'imec.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/imec.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'VOKA',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.voka.be/',
            'imgname' => 'voka.jpeg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/voka.jpeg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'MeetDistrict',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.meetdistrict.be/',
            'imgname' => 'meetdistrict.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/meetdistrict.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Cronos Groep',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://cronos-groep.be/',
            'imgname' => 'cronos.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/cronos.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Showpad',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.showpad.com/',
            'imgname' => 'showpad.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/showpad.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'EWI Vlaanderen',
            'type' => 'Sponsor',
            'level' => 'Bronze',
            'website' => 'https://www.ewi-vlaanderen.be/',
            'imgname' => 'economie.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/economie.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Cegeka',
            'type' => 'Sponsor',
            'level' => 'Bronze',
            'website' => 'https://www.cegeka.be/',
            'imgname' => 'cegeka.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/cegeka.png')))
        ]);
        $partner->save();
    }
}
