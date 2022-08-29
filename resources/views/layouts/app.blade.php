
<a class="sr-only focus:not-sr-only" href="#main" hidden>
  {{ __('Skip to content') }}
</a>

@include('sections.header')
<div id="main-container">
  @if(have_posts())
    <main id="main" class="main container mx-auto ">
      <div id="content">
        @yield('content')
      </div>
    </main>
  @endif
  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>
@include('sections.footer')
