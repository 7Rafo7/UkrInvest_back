<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Repositories\GalleryRepository;

class GalleryController extends AdminBaseController
{


    /**@var GalleryRepository*/
    protected $galleryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->galleryRepository = app(GalleryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $galleryItems = Slider::all();
        $galleryItems = $this->galleryRepository->getAllData();
//        return view('ukrinvest.front.home.index')->with('sliders', $sliders);
        return view('ukrinvest.admin.gallery.index',compact('galleryItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('img');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $request->file('img')->move("images", $name);

        $galleryItem = new Slider();
        $galleryItem->title = $request->title;
        $galleryItem->description=$request->description;
        $galleryItem->img ='../images/'.$name;
        $galleryItem->save();

        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleryItem = $this->galleryRepository->getEdit($id);

        if (empty($galleryItem)){
            return abort(404);
        }
        return view('ukrinvest.admin.gallery.edit',compact('galleryItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('img');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $request->file('img')->move('images',$name);
//        dd($file,$name);
        $galleryItem = $this->galleryRepository->getEdit($id);

        $data = $request->all();
        $result = $galleryItem->update($data);

//        dd(__METHOD__,$data,$result);

        if ($result){
            return redirect()->route('admin.gallery.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
