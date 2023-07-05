<?php

namespace App\Http\Controllers\Guest;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

}
