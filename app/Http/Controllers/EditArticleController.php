<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class EditArticleController extends Controller
{
    public function execute()
    {

        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };

        $article = Article::paginate(4);
        return view('site.edit_article') ->with(['articles'=> $article]);

    }
}
