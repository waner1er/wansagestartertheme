@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
    Categories = {{ $tax->name ?? 'no category '}}

    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection


@section('sidebar')
{{--  @include('sections.sidebar')--}}
@endsection
