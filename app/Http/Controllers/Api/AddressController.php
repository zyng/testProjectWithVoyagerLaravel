<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Map;

class AddressController extends Controller
{
    public function index() {
        $addresses = Map::all();

        return response()->json($addresses);

    }
}
