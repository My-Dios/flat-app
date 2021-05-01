<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profile;
use App\User;
use File;
use Auth;

class ProfileController extends Controller
{
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
        $gambar = $request->picture;
        $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();

        $post = Profile::create([
            "instagramaccount" => $request["instagram_account"],
            "linkedin" => $request["linkedin"],
            "phonenumber" => $request["phone_number"],
            "institution" => $request["institution"],
            "fulladdress" => $request["full_address"],
            "motto" => $request["motto"],
            'profilepicture' => $new_gambar,
            "user_id" => Auth::id()
        ]);

        $gambar->move('images/uploads/pp/',$new_gambar);

        return redirect('/profile');
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
        $new_gambar = null;

        if ($gambar = $request->picture) {
            $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();
            $gambar->move('images/uploads/pp/',$new_gambar);
        }
        // $gambar = $request->picture;
        // $new_gambar = time() . ' . ' . $gambar->getClientOriginalName();
        // $gambar->move('uploads/pp/',$new_gambar);

        $update = Profile::where("id", $id)-> update([
           "instagramaccount" => $request["instagram_account"],
            "linkedin" => $request["linkedin"],
            "phonenumber" => $request["phone_number"],
            "institution" => $request["institution"],
            "fulladdress" => $request["full_address"],
            "motto" => $request["motto"],
            'profilepicture' => $new_gambar,
            "user_id" => Auth::id()
        ]);
        return redirect('/profile');
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
