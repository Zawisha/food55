<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Article;
use App\Category;

class EditOneArticleController extends Controller
{


    public function execute(Article $articles, Request $request)
    {



        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };

        if($request ->isMethod('post')){
            //вытаскиваем всю инфу из request
            $input = $request->except('_token');
            if(empty($input['img']))
            {
                $input['img'] = $articles->img;
                $validator = Validator::make($input, [
                    //если article поле не совпадает с request

                    'title' =>['required',Rule::unique('articles')->ignore($articles->id),],
                    'alias' =>['required',Rule::unique('articles')->ignore($articles->id),],
                    'desc' => 'required',
                    'text' => 'required',
                ]);
            }
            else {
                $validator = Validator::make($input, [
                    //если article поле не совпадает с request

                    'title' => ['required', Rule::unique('articles')->ignore($articles->id),],
                    'alias' => ['required', Rule::unique('articles')->ignore($articles->id),],
                    'desc' => 'required',
                    'text' => 'required',
                    'img' => 'mimes:jpeg,jpg,png|required|max:100000',
                ]);
            }
            //проверка валидации
            if($validator ->fails()){
                return redirect()->route('edit_one_article',$articles->id)->withErrors($validator)->withInput();
            }

            $input['desc']=$request->desc;
            $input['alias'] = $request->alias;
            $input['user_id'] =Auth::user()->id;
            $input['category_id']= $request->category_id+1;


            //работа с файлом
            if($request ->hasFile('img')) {
                $file = $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                //проверка на существование файла
//                if($input['img'])
                if(($input['img']) != ($articles->img) ) {
                    //проверка на картинку в другом посте с таким же именем
                    $result_img = Article::where('img', '=', $input['img'])->get();
                    if (count($result_img) != 0) {
                        //выполняем код возврата
                        $img_name = 'ЕСТЬ';
                        return redirect()->route('edit_one_article', $articles->id)->withInput()->with('status', 'Название изображения не оригинально');
                    }
                }
                $file->move(public_path().'/assets/images/posts',$input['img']);
                }

        //    unlink(public_path('assets/images/posts/'.$articles->img));
                $articles ->unguard();
                $articles ->update($input);
                return redirect()->route('edit');

        }



        if($request ->isMethod('get')) {
            $article_category=Category::select('titles')->get();
            $lists = array();
            foreach ($article_category as $category)
            {
                $lists[] = $category->titles;
            }
            return view('site.edit_one_article')->with(['articles' => $articles,'article_category'=> $lists]);
        }

    }


}
