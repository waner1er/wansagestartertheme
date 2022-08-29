<article @php(post_class())>
  <header>
    <h2 class="entry-title">
      <a href="{{ $permalink }}">
        {!! $title !!}
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
  </header>

  <div class="entry-summary">
    {{ $excerpt }}
  </div>
</article>
