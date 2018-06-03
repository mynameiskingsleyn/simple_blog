@extends('templates.template')
@section('title', '| Blog')
@section('content')
  <div class="col-md-8">
    <main>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Blogs</h1>
        </div>
      </div>

      @foreach($posts as $post)
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>{{ $post->title }}</h2>
            <h5>Published: {{$post->created_at->diffForHumans()}}</h5>
            <p>{{ substr($post->body,0,30) }} {{ strlen($post->body) > 30 ? "..." : "" }}</p>
            <a href="{{ route('blog.single',$post->slug) }}">Read More</a>
          </div>
        </div>

      @endforeach
      <center> {!! $posts->links() !!} </center>
    </main>

  </div>


@stop
