

{{--<li data-aos="fade-right" data-aos-delay="100"><a class="active" href="#">1</a></li>--}}
{{--<li data-aos="fade-right" data-aos-delay="300"><a href="#">2</a></li>--}}
{{--<li data-aos="fade-right" data-aos-delay="500"><a href="#">3</a></li>--}}
{{--<li data-aos="fade-right" data-aos-delay="700"><a href="#">4</a></li>--}}
{{--<li data-aos="fade-right" data-aos-delay="900"><a href="#">5</a></li>--}}

@if ($paginator->hasPages())

    <ul class="pagination">
        @if ($paginator->onFirstPage())

            {{--<li class="disabled"><span>&laquo;</span></li>--}}

        @else

            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

        @endif
        @foreach ($elements as $element)
            @if (is_string($element))

                <li class="disabled"><span>{{ $element }}</span></li>

            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                           <li data-aos="fade-right" data-aos-delay="100"><a class="active" href="{{ $url }}">{{ $page }}</a></li>
                        {{--<li class="active"><span>{{ $page }}</span></li>--}}

                    @else
                            <li data-aos="fade-right" data-aos-delay="300"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())

            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>

        @else

            {{--<li class="disabled"><span>&raquo;</span></li>--}}

        @endif
    </ul>


@endif