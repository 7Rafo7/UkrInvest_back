<?php


namespace App\Repositories\front;


use App\Models\Link;
use App\Repositories\BaseRepository;
use App\Models\Link as Model;

class HomePageLinksRepository extends BaseRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

//    public function allData(){
//        $fbLink = $this->getFbData();
//        $instLink = $this->getInstagramData();
//        $ytLink = $this->getYtData();
//        $gmailLink = $this->getGmailData();
//        $twtLink = $this->getTwitterData();
//
//        $allData = [
//            'facebook' => $fbLink->link,
//            'instagram' => $instLink->link,
//            'youtube' => $ytLink->link,
//            'gmail' => $gmailLink->link,
//            'twitter' => $twtLink->link,
//        ];
//
//        return $allData;
//    }
//
//    public function getFbData(){
//        $data = Link::all()->where('title','Facebook');
//        $fbData = $data->first();
//        return $fbData;
//    }
//
//    public function getInstagramData(){
//        $data = Link::all()->where('title','Instagram');
//        $inData = $data->first();
//        return $inData;
//    }
//
//    public function getYtData(){
//        $data = Link::all()->where('title','Youtube');
//        $ytData = $data->first();
//        return $ytData;
//    }
//    public function getTwitterData(){
//        $data = Link::all()->where('title','Twitter');
//        $twtData = $data->first();
//        return $twtData;
//    }
//    public function getGmailData(){
//        $data = Link::all()->where('title','Gmail');
//        $gmData = $data->first();
//        return $gmData;
//    }

    public function allData(){
        $fbLink = Link::where('title','Facebook')->first();
        $instLink = Link::where('title','Instagram')->first();
        $ytLink = Link::where('title','Youtube')->first();
        $gmailLink = Link::where('title','Gmail')->first();
        $twtLink = Link::where('title','Twitter')->first();

        $allData = [
            'facebook' => $fbLink->link,
            'instagram' => $instLink->link,
            'youtube' => $ytLink->link,
            'gmail' => $gmailLink->link,
            'twitter' => $twtLink->link,
        ];

        return $allData;
    }
}
