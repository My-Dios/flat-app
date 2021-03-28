<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jumbotron;
use File;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JumbotronController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->only(['index','edit', 'update', 'destroy', 'create', 'store']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutsadmin.createjumbotrons');
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
        $gambar = $request->picture;
        $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();

        $postjumbotron = Jumbotron::create([
            "title" => $request["title"],
            "sentence" => $request["sentence"],
            "btnname" => $request["buttonname"],
            "btnlink" => $request["buttonlink"],
            'picture' => $new_gambar,
            "textalign" => $request["textalign"],
            "justifycontent" => $request["justifycontent"],
        ]);

        $gambar->move('uploads/jumbotrons/',$new_gambar);
        Alert::success('Success', 'Billboard has been uploaded');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postjumbotron = Jumbotron::find($id);
        return view('layoutsadmin.editjumbotrons', compact('postjumbotron'));
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

        $update = Jumbotron::where("id", $id)-> update([
            "title" => $request["title"],
            "sentence" => $request["sentence"],
            "btnname" => $request["buttonname"],
            "btnlink" => $request["buttonlink"],
            'picture' => $new_gambar,
            "textalign" => $request["textalign"],
            "justifycontent" => $request["justifycontent"],
        ]);

        $gambar->move('uploads/jumbotrons/',$new_gambar);
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
        Jumbotron::destroy($id);
        return redirect('/admin');
    }
}
