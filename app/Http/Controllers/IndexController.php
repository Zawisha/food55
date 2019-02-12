<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Article;


class IndexController extends Controller
{
    public function execute(Request $request)
    {
        $adminka = false;

        if(Gate::allows('VIEW_ADMIN',Auth::user()))
        {
            $adminka = true;
        };

        $article = Article::paginate(4);
//        $user = Auth::user();

        $index_active = true;
        return view('site.index')->with(['articles'=> $article,'index_active' =>$index_active, 'adminka' => $adminka]);
    }

}
