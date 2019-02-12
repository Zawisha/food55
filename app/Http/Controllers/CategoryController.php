<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Category;



class CategoryController extends Controller
{
    public function execute(Request $request)
    {

      // $article = Category::where()->paginate(1);
        //выбираю все значения из таблицы по критериям

        $result = Category::with('articles')->where('alias', '=', $request -> name)->get();
        //исходя из выбранных вытаскиваем значения из второй таблицы
        //выбрал коллекцию связанных данных , ПОСТАВИЛ СКОБКИ и примени л пагинацию
        $article_category = $result[0]->articles()->paginate(8);
        return view('site.categoryblog') ->with(['article_category'=> $article_category]);
    }
}
