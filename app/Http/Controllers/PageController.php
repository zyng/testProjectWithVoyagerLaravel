<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Map;
use App\Consult;
use App\Team;
use App\InfoBar;
use App\CompanyInfo;
use App\WorkTime;
use App\Tile;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $banners = Banner::all();
        $addresses = Map::all();
        $consults = Consult::all();
        $teams = Team::all();
        $infos = InfoBar::all();
        $companyInfo = CompanyInfo::all();
        $workTime = WorkTime::all();
        $tiles = Tile::where('isActive', true)->get();

        return view('welcome', compact('banners','addresses', 'consults', 'teams', 'infos','companyInfo', 'workTime', 'tiles'));

    }

    

}
