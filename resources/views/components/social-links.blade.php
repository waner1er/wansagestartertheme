<div class="social-links">
  <div class="social-links__title second-title">
    réseaux sociaux
  </div>
  <div class="social-links__wrapper grid-4-equals-cols">
    @foreach($socials as $social)
      @if(!empty($social['url']) )
        <div class="social-links__item social-links__item--{{ $social['slug'] }}" data-expand-target>
          <div class="social-links__item__picto">
            <x-pictos.social social="{{ $social['slug'] }}"/>
          </div>
          <a href="{{$social['url']}}" data-expand-link=></a>
        </div>
      @endif
    @endforeach
  </div>
</div>
