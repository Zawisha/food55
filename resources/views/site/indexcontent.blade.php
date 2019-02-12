

<section class="banner-home">
    <!-- Banner section Start-->

    <!-- container Start-->
    <div class="container">
        <!--Row Start-->
        <div class="row">
            <div class="col-sm-12">
                <h1 data-aos="fade-left" data-aos-delay="300">Добро пожаловать</h1><br>
                <h2 data-aos="fade-left" data-aos-delay="500">на сайт кулинарного блога</h2>
                <h4 data-aos="fade-left" data-aos-delay="700">На нашем сайте вы можете найти рецепты для повседневного приготовления <span>а так же изысканные блюда на праздничный стол</span></h4>
                @guest
                <a class="btn btn-success" href="{{route('login')}}" role="button" data-aos="fade-up" data-aos-delay="1000">Войти</a>
                <a class="btn btn-success" href="{{route('register')}}" role="button" data-aos="fade-up" data-aos-delay="1000">Регистрация</a>
                @endguest
                @if($adminka)
                    <a class="btn btn-success" href="{{route('adminka')}}" role="button" data-aos="fade-up" data-aos-delay="1000">Админка</a>
                    @endif
            </div>
        </div>
        <!--Row Ended-->
    </div>
    <!-- container Ended-->
</section>

<!-- Testimonial section Ended-->

<!-- About section Ended-->

<!-- Items section Ended-->
<section class="items">
    <!-- Page Content -->
    <div class="container">
        <div class="heading" data-aos="fade-up" data-aos-delay="300">
            <h2>Вы можете подобрать рецепт по категориям</h2>
            <h3>Мы уверены что любое из наших блюд придётся Вам по вкусу и Вы захотите готовить его вновь и вновь</h3>
        </div>

        <div class="row text-center text-lg-left">

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="300">
                <div class="imageBox">
                    <a href="{{route('category','soups' )}}" class="d-block mb-4 h-100" data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-1.jpg')}}" alt="супы">
                        <div class="textBox">
                            <h5>Супы</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="500">
                <div class="imageBox">
                    <a href="{{route('category','salads' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-2.jpg')}}" alt="салаты">
                        <div class="textBox">
                            <h5>Салаты</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="700">
                <div class="imageBox">
                    <a href="{{route('category','snack' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-3.jpg')}}" alt="закуски">
                        <div class="textBox">
                            <h5>Закуски</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="900">
                <div class="imageBox">
                    <a href="{{route('category','bakery' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-4.jpg')}}" alt="выпечка">
                        <div class="textBox">
                            <h5>Выпечка</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-right" data-aos-delay="300">
                <div class="imageBox">
                    <a href="{{route('category','dessert' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-5.jpg')}}" alt="десерты">
                        <div class="textBox">
                            <h5>Десерты</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-right" data-aos-delay="500">
                <div class="imageBox">
                    <a href="{{route('category','porridge' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-6.jpg')}}" alt="каши">
                        <div class="textBox">
                            <h5>Каши</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-right" data-aos-delay="700">
                <div class="imageBox">
                    <a href="{{route('category','meat' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-7.jpg')}}" alt="мясные блюда">
                        <div class="textBox">
                            <h5>Мясные блюда</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-right" data-aos-delay="900">
                <div class="imageBox">
                    <a href="{{route('category','sauce' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-8.jpg')}}" alt="соусы">
                        <div class="textBox">
                            <h5>Соусы</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="300">
                <div class="imageBox">
                    <a href="{{route('category','fish' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-9.jpg')}}" alt="рыба">
                        <div class="textBox">
                            <h5>Рыба</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="500">
                <div class="imageBox">
                    <a href="{{route('category','chicken' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-10.jpg')}}" alt="курица">
                        <div class="textBox">
                            <h5>Курица</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="700">
                <div class="imageBox">
                    <a href="{{route('category','garnish' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-11.jpg')}}" alt="гарниры">
                        <div class="textBox">
                            <h5>Гарниры</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-left" data-aos-delay="900">
                <div class="imageBox">
                    <a href="{{route('category','winter' )}}" class="d-block mb-4 h-100"  data-gallery="example-gallery">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/images/item-12.jpg')}}" alt="закатки">
                        <div class="textBox">
                            <h5>Закатки и соленья</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>
<!-- Items section Ended-->

<!-- Blog section Ended-->
<section class="blog">
    <div class="gradient"></div>
    <!-- Page Content -->
    <div class="container">
        <div class="heading" data-aos="fade-up" data-aos-delay="300">
            <h2>Некоторые из наших рецептов</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="500">

            @foreach($articles as $article)
                <div class="col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <a href="{{route('blog_single',$article->id )}}" class="d-block mb-5 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('assets/images/posts/'.$article->img)}}" alt="blog-1">
                            </a>
                        </div>
                        <div class="col-lg-7 col-sm-12 inner-content">
                            <h5><a href="{{route('blog_single',$article->id )}}"> {{  $article->title }}</a></h5>
                            <h6> {!! $article->desc !!} </h6>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- /.container -->
</section>
<!-- Blog section Ended-->

