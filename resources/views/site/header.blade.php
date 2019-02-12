<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a @if(isset($index_active)) class="active" @endif  href="{{route('index')}}">Главная</a>
    <a @if(isset($about_active)) class="active" @endif href="{{route('about')}}">О нас</a>
    <a @if(isset($recipes_active)) class="active" @endif href={{route('recipes')}}>Рецепты</a>
    <a @if(isset($blog_active)) class="active" @endif href={{route('blog')}}>Блог</a>
</div>


<nav id="navbar">
    <!-- container Start-->
    <div class="container">
        <!--Row Start-->
        <div class="row">
            <div class="col-lg-4 col-xs-9">
                <a href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}"></a>
            </div>
            <div class="col-lg-8 col-xs-3">
                <div class="social-icons square">
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <span class="slide-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Row Ended-->
    </div>
    <!-- container Ended-->
</nav>