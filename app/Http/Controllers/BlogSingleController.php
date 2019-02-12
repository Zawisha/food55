<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BlogSingleController extends Controller
{
    public function execute($id)
    {

        $blog_article = Article::where('id','=',$id)->get();
        return view('site.blog_single') ->with([
                'name' =>  $blog_article
                                                     ]);
    }
}

