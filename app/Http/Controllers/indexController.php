<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;
use App\Jumbotron;
use App\Profile;
use App\Testimony;
use File;
use Auth;
use Carbon\Carbon;

class indexController extends Controller
{
    public function indexnews()
    {
        // $current = Carbon::now();

        $post= Berita::orderBy('created_at', 'desc')->get();
        return view('layouts.news.newsfox', compact('post'), ["title" => "News"]);
    }

    public function indexhome()
    {

        $post= Berita::orderBy('created_at','desc')->limit(3)->get();
        $postjumbotron= Jumbotron::orderBy('created_at','desc')->get();
        $posttestimony= Testimony::orderBy('created_at','desc')->get();
        return view('layouts.home.homefox', compact('post', 'postjumbotron', 'posttestimony'), ["title" => "Home"]);
    }

    public function indexprofilecheck()
    {
        $query = Profile::where('user_id', Auth::id())->first();
        if ($query == null) {
            return view('layouts.myprofile.profile', ["title" => "MyProfile"]);
        } else {
            $postprofile= Profile::orderBy('created_at','desc')->get();
            return view('layouts.myprofile.editprofile', compact('postprofile'), ["title" => "MyProfile"]);
        }
    }

    public function indexcourse()
    {
        return view('layouts.course.coursefox', ["title" => "Course"]);
    }
}
