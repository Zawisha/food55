<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Article;
use App\Category;
use Illuminate\Support\Facades\Auth;


class AddArticleController extends Controller
{

    public function execute(Request $request)
    {

        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };


        if($request ->isMethod('post')){

            //вытаскиваем всю инфу из request
            $input = $request->except('_token');

            $validator = Validator::make($input, [

               'title' => 'required|max:255|unique:articles',
                'alias' =>'required|max:255|unique:articles',
                'desc' => 'required',
                'text' => 'required',
                'img' =>'mimes:jpeg,jpg,png|required|max:100000',
            ]);
            //проверка валидации

            if($validator ->fails()){

                return redirect()->route('add')->withErrors($validator)->withInput();

            }




            //работа с файлом
            if($request ->hasFile('img')) {
                $file = $request->file('img');
                $input['desc']=$request->desc;
                $input['alias'] = $request->alias;
                $input['user_id'] =Auth::user()->id;
                $input['category_id']= $request->category_id+1;
                $input['img'] = $file->getClientOriginalName();
                //проверка на существование файла
                $result_img = Article::where('img', '=', $input['img'])->get();
                if(count($result_img)!=0){
                   //выполняем код возврата
                    $img_name ='ЕСТЬ';
                    return redirect()->route('add')->withInput();
                }

                $file->move(public_path().'/assets/images/posts',$input['img']);
                $article_add = new Article();
                $article_add ->unguard();
                $article_add->fill($input);


                if($article_add->save()){
                    return redirect()->route('edit');
                }


            }



        }


        if($request ->isMethod('get')) {

          //получаю коллекцию эллементов titles
            $article_category=Category::select('titles')->get();
            //выбираю все элементы ( заменяя массивом)

            $lists = array();
            foreach ($article_category as $category)
            {
                $lists[] = $category->titles;
            }

//            $blog_category_id = Category::select('id')->where('titles','=','Супы')->get();
//            dd($blog_category_id[0]->id);

            return view('site.add_article')->with(['article_category'=> $lists]);
        }

    }
}
