<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;
use App\Jumbotron;
use File;
use Auth;

class indexAdminController extends Controller
{
    public function indexhomeadmin()
    {
        $postjumbotron= Jumbotron::orderBy('created_at','desc')->get();
        return view('layoutsadmin.homedatabase.postdatahome', compact('postjumbotron'));
    }

    public function indexnewsadmin()
    {
        $post= Berita::orderBy('created_at','desc')->get();
        return view('layoutsadmin.newsdatabase.postdatanews', compact('post'));
    }
}
