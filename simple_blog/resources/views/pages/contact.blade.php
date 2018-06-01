@extends('templates.template')
@section('content');
<div class="col-md-8">
  <center><h3>Contact us</h3></center>
  <div class="well">
    <h4>Contact info</h4>
    <p>Email : {{$data['email']}}</p>
    <p>Phone: {{$data['phone']}}</p>
  </div>
</div>

@endsection
