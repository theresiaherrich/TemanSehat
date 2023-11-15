<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{
    public function index(): View
    {
        //get posts

        //render view with posts
        return view('about');
    }
}
