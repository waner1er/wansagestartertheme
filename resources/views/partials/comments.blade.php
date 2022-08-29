Il y a {{comments_number()}}


@foreach($comments as $comment)
  <div style="margin: 3rem auto; border: 1px solid red; padding: 1rem">
{{--    @dump($comment)--}}
    <div> auteur {{ $comment->comment_ID}}</div>
    <br>
    <div>{{ $comment->comment_author}}</div>
    <br>
    <div>{!! $comment->comment_content !!}</div>
    <br>
  </div>
@endforeach
