<?php

namespace App\Http\Controllers;
use App\Banner;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $banners = Banner::all();

        return view('welcome', ['banners' => $banners]);

    }


}
