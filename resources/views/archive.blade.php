@extends('layouts.app')


@section('content')
  <div class="r1-archives">
    @while(have_posts())
      @php(the_post())
      <x-archive-item/>
    @endwhile
  </div>
  <div>
    @if(function_exists('wp_pagenavi'))
      {{ wp_pagenavi() }}

    @else
      @if(current_user_can('administrator'))
        pensez a installer wp_navi ;)
      @endif
    @endif
  </div>
@endsection

