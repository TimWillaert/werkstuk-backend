<?php

use App\Partner;
use Illuminate\Database\Seeder;

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
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/bozar.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Erasmushogeschool Brussel',
            'type' => 'Partner',
            'level' => 'Gold',
            'website' => 'https://www.erasmushogeschool.be/',
            'imgname' => 'ehb.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/ehb.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Brussel Stad',
            'type' => 'Partner',
            'level' => 'Gold',
            'website' => 'https://www.brussel.be/',
            'imgname' => 'bxl.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/bxl.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Imec',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.imec.be/',
            'imgname' => 'imec.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/imec.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'VOKA',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.voka.be/',
            'imgname' => 'voka.jpeg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/voka.jpeg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'MeetDistrict',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.meetdistrict.be/',
            'imgname' => 'meetdistrict.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/meetdistrict.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Cronos Groep',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://cronos-groep.be/',
            'imgname' => 'cronos.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/cronos.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Showpad',
            'type' => 'Sponsor',
            'level' => 'Silver',
            'website' => 'https://www.showpad.com/',
            'imgname' => 'showpad.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/showpad.png')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'EWI Vlaanderen',
            'type' => 'Sponsor',
            'level' => 'Bronze',
            'website' => 'https://www.ewi-vlaanderen.be/',
            'imgname' => 'economie.jpg',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/economie.jpg')))
        ]);
        $partner->save();
        $partner = new Partner([
            'name' => 'Cegeka',
            'type' => 'Sponsor',
            'level' => 'Bronze',
            'website' => 'https://www.cegeka.be/',
            'imgname' => 'cegeka.png',
            'img' => base64_encode(file_get_contents(storage_path('app/public/logos/cegeka.png')))
        ]);
        $partner->save();
    }
}
