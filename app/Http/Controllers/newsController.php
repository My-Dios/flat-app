<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;
use App\Jumbotron;
use File;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;


class newsController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->only(['edit', 'update', 'destroy', 'create', 'store']);
    }

    // public function editAll($id)
    // {
    //     $post = Post::find($id);
    //     // dd($postlist);
    //     return view('layouts.detailnewsfox', compact('post'));
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

        $gambar->move('images/uploads/news/',$new_gambar);
        Alert::success('Success', 'News has been uploaded');

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
         // dd($postlist);
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
        $gambar->move('images/uploads/news/',$new_gambar);
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
        $delete = Berita::destroy($id);
        return redirect('/admin');
    }
}
