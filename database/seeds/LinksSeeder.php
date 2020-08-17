<?php

use Illuminate\Database\Seeder;
use App\Models\Link;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fbSeed();
        $this->instSeed();
        $this->ytSeed();
        $this->twtSeed();
        $this->gmailSeed();
    }

    private function fbSeed(){
        $link = new Link();
        $link->title = 'Facebook';
        $link->link = 'https://www.facebook.com/';
        $link->save();
    }

    private function instSeed(){
        $link = new Link();
        $link->title = 'Instagram';
        $link->link = 'https://www.instagram.com/';
        $link->save();
    }
    private function ytSeed(){
        $link = new Link();
        $link->title = 'Youtube';
        $link->link = 'https://www.youtube.com/';
        $link->save();
    }
    private function twtSeed(){
        $link = new Link();
        $link->title = 'Twitter';
        $link->link = 'https://twitter.com/';
        $link->save();
    }
    private function gmailSeed(){
        $link = new Link();
        $link->title = 'Gmail';
        $link->link = 'https://gmail.com/';
        $link->save();
    }
}
