<div class="page-header ">
  <div class="page-header__custom-logo">
    {{the_custom_logo('full')}}
  </div>

  <div class="container-large page-header__wrapper">
    @if(is_home())
    <h2 class="page-header__title main-title">
        {{carbon_get_theme_option('r1-home-title')}}
    </h2>
      <div class="page-header__description">
        {{carbon_get_theme_option('r1-home-description')}}
      </div>
      @else
      <h2 class="page-header__title main-title">
        {!! $title !!}
      </h2>
      <div class="page-header__description">
        {!!  $description !!}
      </div>
      @endif



    {!!  $breadcrumb  !!}

  </div>
</div>
