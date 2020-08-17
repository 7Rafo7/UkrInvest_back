<?php

namespace App\Http\Controllers\Front;

use App\Models\Link;
use App\Models\Slider;
use App\Repositories\front\HomePageLinksRepository;
use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{
    /**@var HomePageLinksRepository */
    protected $homePageLinksRepository;

    public function __construct()
    {
        parent::__construct();
        $this->homePageLinksRepository = app(HomePageLinksRepository::class);
    }

    /**
     * Show the application main.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galleryItems = Slider::all();


        $allData = $this->homePageLinksRepository->allData();


//        dd($fbLink,$instLink,$ytLink,$gmailLink,$twtLink);
//        dd($ytLink);
//        dd($allLinks);
//        dd($allData);
        return view('ukrinvest.front.home.index',compact(['galleryItems','allData']));
    }


}
