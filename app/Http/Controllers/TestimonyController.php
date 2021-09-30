<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Testimony;
use File;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonyController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin')->only(['index','edit', 'update', 'destroy', 'create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutsadmin.homedatabase.testimonies.createtestimony');
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

        $posttestimony = Testimony::create([
            "name" => $request["name"],
            "position" => $request["position"],
            "sentence" => $request["sentence"],
            'picture' => $new_gambar,
        ]);

        $gambar->move('images/uploads/testimony/',$new_gambar);
        Alert::success('Success', 'Testimony has been uploaded');
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
        $posttestimony = Testimony::find($id);
        return view('layoutsadmin.homedatabase.testimonies.edittestimony', compact('posttestimony'));
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

        $update = Testimony::where("id", $id)-> update([
             "name" => $request["name"],
            "position" => $request["position"],
            "sentence" => $request["sentence"],
            'picture' => $new_gambar,
        ]);

        $gambar->move('images/uploads/testimony/',$new_gambar);
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
        Testimony::destroy($id);
        return redirect('/admin');
    }
}
