@extends('templates.post_template')
@section('title', '| View Post')
@section('content')
<div class="container">
  <div class="row">
    {!! Form::model($post,['route'=>['posts.update',$post->id], 'method'=>'PUT']) !!}
    <div class="col-md-8">
      {{ Form::label('title','Title')}}
      {{ Form::text('title',null,["class"=>"form-control input-lg"])}}

      {{ Form::label('slug','Slug')}}
      {{ Form::text('slug',null,["class"=>"form-control input-lg"])}}

      {{ Form::label('body','More info:',['class'=>'form-input-space'])}}
      {{ Form::textarea('body',null,["class"=>'form-control'])}}
    </div>
    <div class="col-md-4">
      <div class="well">
          <dl class="dl-horizontal">
            <dt> Created At: </dt>
            <dd> {{ date('d-M-Y',strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt> Updated : </dt>
            <dd> {{ $post->updated_at->diffForHumans() }}</dd>
          </dl>
          <hr>
          <div class="row">
              <div class="col-sm-6">
                {{ Form::submit('Save Changes',["class"=>"btn btn-success btn-block"]) }}
              </div>
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.show','Cancel', array($post->id), array('class'=>"btn btn-primary btn-block"))  !!}
              </div>
          </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
