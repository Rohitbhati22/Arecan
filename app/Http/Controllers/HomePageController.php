<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //

    public function index(Request $req)
    {
        $user = Auth::check();
        if($user)
        {
            $user_id = Auth::user()->id;
        }
        $title = 'Arcan';
        return view('home', compact( 'title', 'user'));
    }

    public function imageClassification(Request $req)
    {
        $user = Auth::check();
        if($user)
        {
            $user_id = Auth::user()->id;
        }
        $title = 'Arcan - Image Classification';
        return view('image-classification', compact('title', 'user'));
    }

    public function imageToText(Request $req)
    {
        $title = 'Arcan - Image Classification';
        $user = Auth::check();
        if($user)
        {
            $user_id = Auth::user()->id;
        }
        return view('image-to-text', compact('title', 'user'));
    }

    public function imageRemoveBG(Request $req)
    {
        $title = 'Arcan - Remove BG';
        $user = Auth::check();
        if($user)
        {
            $user_id = Auth::user()->id;
        }
        return view('image-bg-remove', compact('title', 'user'));
    }

    public function imageEditor(Request $req)
    {
        $title = 'Arcan - Image Editor';
        $user = Auth::check();
        if($user)
        {
            $user_id = Auth::user()->id;
        }
        return view('edit', compact('title', 'user'));
    }
}
