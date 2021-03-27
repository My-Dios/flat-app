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
    public function index()
    {
        $postjumbotron= Jumbotron::orderBy('created_at','desc')->get();
        $post= Berita::orderBy('created_at','desc')->get();
        return view('layoutsadmin.homeadmin', compact('post', 'postjumbotron'));
    }
}
