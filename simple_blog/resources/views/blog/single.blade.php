
@extends('templates.template')
@section('title',"| $post->title")
@section('content')

      <div class="col-md-8">
        <center><h1>{{ $post->title }}</h1>
          <div class="main">
            <p>{{ $post->body }}</p>
          </div>
        </center>
      </div>


@endsection
