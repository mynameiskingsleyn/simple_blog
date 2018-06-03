@extends('templates.post_template')
@section('title','| Create New Post')
@section('stylesheets')
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />-->
  {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
<div class="container" style="min-height:600px;">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create new Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store','method'=>'post','data-parsley-validate'=>'']) !!}

        {{Form::label('title','Title:')}}
        {{Form::text('title',null,array('class'=>"form-control",'required'=>'','maxlength'=>'40','minlength'=>'5'))}}

        {{Form::label('slug','Slug:')}}
        {{Form::text('slug',null,array('class'=>"form-control",'required'=>'','maxlength'=>'40','minlength'=>'5'))}}

        {{ Form::label('body',"Post Body:") }}
        {{ Form::textarea('body',null,array('class'=>'form-control'))}}
        
        {{ Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px','required'=>'','maxlength'=>'255')) }}

      {!! Form::close() !!}
    </div>

  </div>

</div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@stop
