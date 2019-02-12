<script type="text/javascript" src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>


@if(isset($errors)&&(!empty($errors)))
    <div class="alert-danger" >
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


{!! Form::open(['url'=>route('edit_one_article',$articles->id ), 'class' =>'form-horizontal','method'=>'POST', 'onsubmit'=>'return validatefunc()', 'name' => 'validateform','enctype'=>'multipart/form-data']) !!}

{{ csrf_field() }}

{!! Form::label('Название статьи') !!}

@if(isset($articles->title))
    {!! Form::text('title',$articles->title,['id' => 'hold_title']) !!}<br>
@else
    {!! Form::text('title',old('title'),['id' => 'hold_title']) !!}<br>
@endif


{!! Form::label('Выберите категорию') !!}

@if(isset($articles->category_id))
    {!! Form::select('category_id',$article_category,$articles->category_id)!!}
@else
    {!! Form::select('category_id',$article_category,old('category_id'))!!}
@endif
<br>

{!! Form::label('Полный текст статьи') !!}

<div class="col-lg-8 ">
@if(isset($articles->text))
    {!! Form::textarea('text',$articles->text,['id' => 'editor']) !!}
@else
    {!! Form::textarea('text',old('text'),['id' => 'editor']) !!}
@endif
</div>
{!! Form::label('Сокращённый текст статьи') !!}

<div class="col-lg-8 ">

@if(isset($articles->desc))
    {!! Form::textarea('desc',$articles->desc,['id' => 'editor']) !!}
@else
    {!! Form::textarea('desc',old('desc'),['id' => 'editor']) !!}
@endif
</div>
{!! Form::label('Псевдоним') !!}

@if(isset($articles->alias))
    {!! Form::textarea('alias',$articles->alias,array('rows' => 2)) !!}
@else
    {!! Form::textarea('alias',old('alias'),array('rows' => 2)) !!}
@endif
<br>

{!! Form::label('Заглавное изображение') !!}
<div class="col-lg-4 ">
<img class="img-fluid img-thumbnail" src="{{asset('assets/images/posts/'.$articles->img)}}" alt="blog-1">
</div>
{!! Form::file('img',['class' =>'filestyle']); !!}<br>

{!! Form::submit('Добавить',['id' =>'mybutton','class'=>'btn']) !!}

{!! Form::close() !!}


<script >
    CKEDITOR.replace( 'editor',{
        filebrowserBrowseUrl : '/elfinder/ckeditor'
    } );
    CKEDITOR.replace( 'desc_text',{
        filebrowserBrowseUrl : '/elfinder/ckeditor'
    } );
    function validatefunc() {
        var title = document.forms['validateform']['title'].value;
        if (title.length == 0) {
            var element_title = document.getElementById("hold_title");
            element_title.classList.add("title_frame");
            return false;
        }
    }



</script>
