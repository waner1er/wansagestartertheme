<article @php(post_class())>
  <header>
    <h2 class="entry-title">
      <a href="{{ $permalink }}">
        {!! $title !!}
    </h2>

    @include('partials.entry-meta')
  </header>

  <div class="entry-summary">
    {!! $excerpt !!}
  </div>
</article>
