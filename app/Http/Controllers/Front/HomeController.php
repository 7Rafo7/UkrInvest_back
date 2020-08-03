<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ukrinvest.front.home.index');
    }


}
