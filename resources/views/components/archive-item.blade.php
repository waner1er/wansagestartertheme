<div class="r1-archives__item" data-expand-target>
  <div class="r1-archives__item-thumbnail">
    @if($thumbnail)
      {!! $thumbnail !!}
    @else
      <div >
        <img width="200px" height="auto" src="{{ asset('images/no-img.jpg') }}" alt="no thumbnail">
      </div>
    @endif
  </div>
  <div class="r1-archives__item-content">
    <h2 class="r1-archives__item-title">
      <a href="{{ $permalink }}" data-expand-link>{{ $title }}</a>
    </h2>
    <div class="r1-archives__item-post-excerpt">
      {{ $excerpt }}
    </div>
  </div>
</div>
