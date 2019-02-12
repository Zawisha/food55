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


@if(isset($img_name))
    <div class="alert-danger" >
        {{ $img_name }}
    </div>
@endif


{!! Form::open(['url'=>route('add'), 'class' =>'form-horizontal','method'=>'POST', 'onsubmit'=>'return validatefunc()', 'name' => 'validateform','enctype'=>'multipart/form-data']) !!}

{{ csrf_field() }}

{!! Form::label('Название статьи') !!}
{!! Form::text('title',old('title'),['id' => 'hold_title']) !!}<br>

{!! Form::label('Выберите категорию') !!}

{!! Form::select('category_id',$article_category,old('category_id'))!!}
<br>

{!! Form::label('Полный текст статьи') !!}

<div class="col-lg-8 ">

{!! Form::textarea('text',old('text'),['id' => 'editor']) !!}

</div>
{!! Form::label('Сокращённый текст статьи') !!}

<div class="col-lg-8">
{!! Form::textarea('desc',old('desc'),['id' => 'desc_text']) !!}
</div>
{!! Form::label('Псевдоним') !!}<br>

{!! Form::textarea('alias',old('alias'),array('rows' => 2)) !!}<br>

{!! Form::label('Заглавное изображение') !!}

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
