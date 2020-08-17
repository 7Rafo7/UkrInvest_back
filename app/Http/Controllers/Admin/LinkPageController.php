<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Repositories\LinkRepository;
use Illuminate\Http\Request;

class LinkPageController extends AdminBaseController
{

    /**
     * @var LinkRepository
    */
    protected $linkRepository;

    public function __construct()
    {
        parent::__construct();
        $this->linkRepository = app(LinkRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $links = Link::all();
        return view('ukrinvest.admin.links.index',compact('links'));
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
        $data = $request->input();

        $result = Link::create($data);

        if ($result){
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::all()->find($id);
//        $link = $this->linkRepository->getEdit($id);

        return view('ukrinvest.admin.links.edit',compact('link'));
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

        $link = Link::all()->find($id);
        $data = $request->all();

        $result = $link->update($data);

        if ($result){
            return redirect()->route('admin.links.index');
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
        $result = Link::destroy($id);

        if ($result){
            return redirect()->route('admin.links.index');
        }
//
    }
}
