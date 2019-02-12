<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class BlogController extends Controller
{
    public function execute()
    {

        $article = Article::paginate(8);

        $blog_active = true;

        return view('site.articlesblog') ->with(['articles'=> $article, 'blog_active' =>$blog_active]);
    }
}
