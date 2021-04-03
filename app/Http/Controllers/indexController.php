<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;
use App\Jumbotron;
use App\Profile;
use File;
use Auth;

class indexController extends Controller
{
    public function indexnews()
    {
        $post= Berita::orderBy('created_at','desc')->get();
        return view('layouts.newsfox', compact('post'));
    }

    public function indexhome()
    {
        $post= Berita::orderBy('created_at','desc')->limit(3)->get();
        $postjumbotron= Jumbotron::orderBy('created_at','desc')->get();
        return view('layouts.homefox', compact('post', 'postjumbotron'));
    }

    public function indexprofilecheck()
    {
        $query = Profile::where('user_id', Auth::id())->first();
        if ($query == null) {
            return view('layouts.profile');
        } else {
            $postprofile= Profile::orderBy('created_at','desc')->get();
            return view('layouts.editprofile', compact('postprofile'));
        }
    }

    public function indexcourse()
    {
        return view('layouts.coursefox');
    }
}
