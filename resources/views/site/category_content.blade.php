<section id="blog">
    <div class="gradient"></div>
    <div class="container">
        <h1>Добро пожаловать в наш блог</h1>
    </div>
    <hr/>
    <!-- Page Content -->
    <div class="container">
        <div class="heading" data-aos="fade-up" data-aos-delay="300">
        </div>
        <div class="row">

            @foreach($article_category as $article)
                <div class="col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <a href="{{route('blog_single',$article->id )}}" class="d-block mb-5 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('assets/images/posts/'.$article->img)}}" alt="blog-1">
                            </a>
                        </div>
                        <div class="col-lg-7 col-sm-12 inner-content">
                            <h5><a href="{{route('blog_single',$article->id )}}"> {{  $article->title }}</a></h5>
                            <h6> {{  $article->desc }} </h6>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row bt">
            <div class="col-sm-12">
                <ul>
                    {{ $article_category ->links('site.pagination') }}
                </ul>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- Blog section Ended-->