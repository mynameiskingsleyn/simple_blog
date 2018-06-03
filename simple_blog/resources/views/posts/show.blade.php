@extends('templates.post_template')
@section('title', '| View Post')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label> URL: </label>
          <p> <a href="{{ route('blog.single',$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></p>
        </dl>
          <dl class="dl-horizontal">
            <label> Created At: </label>
            <p> {{ date('d-M-Y',strtotime($post->created_at)) }}</p>
          </dl>
          <dl class="dl-horizontal">
            <label> Updated : </label>
            <p> {{ $post->updated_at->diffForHumans() }}</p>
          </dl>
          <hr>
          <div class="row">
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>"btn btn-primary btn-block")) !!}
              </div>
              <div class="col-sm-6">
                {!! Form::open(['route'=>['posts.destroy',$post->id], 'method'=>'DELETE']) !!}
                  {{ Form::submit('Delete',['class'=>'btn btn-danger btn-block']) }}
                {!! Form::close() !!}

              </div>
              <div class="col-sm-12">
                <center>
                  {!! Html::linkRoute('posts.index','<< See all shows',[],['class'=>'btn btn-default btn-block', 'style'=>'margin-top:20px']) !!}
                </center>
              </div>
          </div>
      </div>
    </div>

  </div>
</div>
@endsection
