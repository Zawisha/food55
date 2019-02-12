@extends ('layouts.blog')

@section ('header')
    @include('site.header')
@endsection

@section ('banner')
    @include('site.banner')
@endsection

@section ('content')
    @include('site.users_content')
@endsection

@section ('subscribe')
    @include('site.subscribe')
@endsection

@section ('footer')
    @include('site.footer')
@endsection