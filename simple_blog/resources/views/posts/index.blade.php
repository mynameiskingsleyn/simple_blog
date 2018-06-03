@extends('templates.template')
@section('title','POSTS')
@section('content');
<div class="col-md-8">
  <center><h3>Posts</h3></center>
  <div class="well">
      Best blog site Ever!!!
  </div>
  <div class="row">
    <div class="col-md-8">
      @foreach($posts as $post)
        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>
            {{ substr($post->body,0,20) }} {{ strlen($post->body)>20 ? "...":""}}
          </p>
          {!! Html::linkRoute('posts.show','Read more', array($post->id),array('class'=>'btn btn-primary')) !!}

        </div>
      <hr>
      @endforeach
      @if(count($posts) ==  0)
      <h3> Sample Posts </h3>

          <div class="post">
            <h3>Post Title</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Ut massa nibh, pretium sit amet tellus sit amet, dignissim luctus diam.
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed aliquet ultrices augue vel pellentesque.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post Title</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Ut massa nibh, pretium sit amet tellus sit amet, dignissim luctus diam.
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed aliquet ultrices augue vel pellentesque.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post Title</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Ut massa nibh, pretium sit amet tellus sit amet, dignissim luctus diam.
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed aliquet ultrices augue vel pellentesque.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          <hr>
        @endif
        </div>

  </div>

</div>
<div class="text-center">
  {!! $posts->links() !!}
</div>
@endsection
