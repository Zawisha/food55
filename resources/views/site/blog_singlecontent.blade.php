<div id="blog-single">
    <div class="container">
        <h1 data-aos="fade-left" data-aos-duration="500">Welcome to our food blog</h1>
    </div>
    <hr/>
    <div class="container">

        @foreach( $name  as $service)

        @endforeach

        <div class="heading">
            <h2> {{ $service->title }}</h2>
        </div>


        <div class="row" data-aos="fade-up" data-aos-duration="700">
            <div class="col-sm-12 col-lg-12 box">
                {!! $service->text !!}
            </div>
        </div>


    </div>
</div>
<!-- Blog_single Section End -->