@if($articles)
    <section id="blog">
    <div class="container">
    <div class="table">
        <table class="table table-sm">
            <thead>
            <tr>
                <th>id</th>
                <th>img</th>
                <th>Title</th>
                <th>Desc</th>
            </tr>
            </thead>
            <tbody>

            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td width="200" >  <a href="{{route('blog_single',$article->id )}}"><img class="img-fluid "  src="{{asset('assets/images/posts/'.$article->img)}}" alt="blog-1"> </a></td>
                    <td>  <a href="{{route('blog_single',$article->id )}}">{{ $article->title }}</a></td>
                    <td>{!! $article->desc !!}</td>
                    <td>
                        {!! Form::open(['url' => route('admin.article.destroy',['articles' => $article->id]),'method' =>'POST']) !!}
                        {{ method_field('DELETE')  }}
                        {!! Form::button('Удалить',['class' =>'btn btn-danger', 'type' =>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td> <a <button  href="{{ route('edit_one_article',$article->id) }}" type="button" class="btn btn-primary">Редактировать </button> </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row bt">
        <div class="col-sm-12">
            <ul>
                {{ $articles ->links('site.pagination') }}
            </ul>
        </div>
    </div>
    </div>
    </section>
    @endif