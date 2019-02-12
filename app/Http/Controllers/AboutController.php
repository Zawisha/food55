<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function execute(Request $request)
    {
        $about_active = true;

        return view('site.about')->with(['about_active' =>$about_active]);
    }


}