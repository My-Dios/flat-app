<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;
use File;
use Auth;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= Berita::orderBy('created_at','desc')->get();
        return view('layoutsadmin.homeadmin', compact('post'));
    }

    public function indexnews()
    {
        $post= Berita::orderBy('created_at','desc')->get();
        return view('layouts.newsfox', compact('post'));
    }

    public function indexhome()
    {
        $post= Berita::orderBy('created_at','desc')->limit(3)->get();
        return view('layouts.homefox', compact('post'));
    }


    // public function indexnewsfooter()
    // {
    //     $post= Berita::orderBy('created_at','desc')->limit(2)->get();
    //     return view('foxtl.foxmaster', compact('post'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutsadmin.createnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     "title" => 'required',
        //     "openingsentence" => 'required',
        //     "description" => 'required',
        //     'picture' => 'required'
        // ]);

        $gambar = $request->picture;
        $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();

        $post = Berita::create([
            "title" => $request["title"],
            "openingsentence" => $request["openingsentence"],
            "description" => $request["description"],
            'picture' => $new_gambar,
        ]);

        $gambar->move('uploads/news/',$new_gambar);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Berita::find($id);
        return view('layouts.detailnewsfox', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Berita::find($id);
        return view('layoutsadmin.editnews', compact('post'));
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
        $gambar = $request->picture;
        $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();

        $update = Berita::where("id", $id)-> update([
           "title" => $request["title"],
            "openingsentence" => $request["openingsentence"],
            "description" => $request["description"],
            'picture' => $new_gambar,
        ]);
        $gambar->move('uploads/news/',$new_gambar);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect('/admin');
    }
}
