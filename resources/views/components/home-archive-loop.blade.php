@foreach($categories as $cat)
    @php($thumb_id = carbon_get_term_meta( $cat->term_id, 'cat_thumb' ))


  <div class="home-category" data-expand-target>
    {{  $cat->name }}
    {{ $cat->description }}
    {!!  wp_get_attachment_image($thumb_id, 'r1-logo') !!}
    <a href="{{get_category_link($cat->term_id)}}" data-expand-link></a>
  </div>
@endforeach
