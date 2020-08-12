<?php

namespace App\Http\Controllers\Front;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{
    /**
     * Show the application main.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galleryItems = Slider::all();
        return view('ukrinvest.front.home.index',compact('galleryItems'));
    }


}
