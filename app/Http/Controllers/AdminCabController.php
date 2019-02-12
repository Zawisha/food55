<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AdminCabController extends Controller
{



    public function execute()
    {

        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };

        return view('site.admin');

    }

}
