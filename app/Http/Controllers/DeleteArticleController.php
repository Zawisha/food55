<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Article;

class DeleteArticleController extends Controller
{
    public function execute(Article $articles, Request $request)
    {

        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };

        if($request ->isMethod('DELETE'))
        {

           unlink(public_path('assets/images/posts/'.$articles->img));
           $articles ->delete();
           return redirect('/admin/edit_article');
        }

    }
}
