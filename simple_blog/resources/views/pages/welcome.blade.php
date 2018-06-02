@extends('templates.template')
@section('content');
<div class="col-md-8">
  <center><h3>Home page</h3></center>
  <div class="well">
      greatest fitness club on earth
  </div>
  Nulla metus augue, rutrum vitae scelerisque eu, tempus vel neque. Praesent dolor sem, dictum vitae justo nec, dapibus condimentum lorem. Curabitur lacinia non diam quis pulvinar. Praesent sed accumsan tellus. Morbi ex velit, faucibus et lorem id, malesuada aliquet elit. Ut et faucibus mauris. Donec eget efficitur sem, eu pellentesque lorem.

  Suspendisse potenti. Aliquam cursus dapibus erat, vel aliquet urna euismod sed. Curabitur suscipit pretium nunc, ut iaculis est viverra vel. Nulla facilisi. Donec velit justo, rutrum a velit sit amet, tincidunt placerat erat. Morbi viverra lacus ac nisl suscipit porta. Duis metus diam, euismod vel purus a, congue iaculis arcu. Suspendisse vehicula aliquet pharetra. Aenean eros est, dapibus in blandit vel, tincidunt quis felis. In ut erat risus. Vestibulum laoreet, dui non dictum aliquet, velit enim tempor massa, at hendrerit dui metus facilisis risus. Aliquam ultricies eu enim volutpat pretium. Duis vel dignissim tortor, ut ultricies quam.

  Aenean consequat odio non dui iaculis, pulvinar dapibus erat varius. Cras condimentum a magna ut mattis. Mauris tempor massa eleifend tellus egestas tempus. Nulla mattis dui mauris, vitae consequat dolor lacinia at. Aliquam quis pulvinar neque. Sed blandit elit nec nunc imperdiet varius. Donec euismod mollis metus, ut egestas mi convallis quis. Suspendisse aliquet lectus mauris, sit amet commodo metus mattis eu. Nunc ut tortor gravida, vulputate felis et, accumsan urna. Integer vel scelerisque ex.
  <div class="well">
    <center><h2>Recent Blogs</h2> </center>
      @if(count($posts)> 0)
      @foreach($posts as $post)
        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>
            {{ substr($post->body,0,20) }} {{ strlen($post->body)>20 ? "...":""}}
          </p>
        <!--  { Html::linkRoute('pages.single','Read more', array($post->id),array('class'=>'btn btn-primary')) } -->

        </div>
      <hr>
      @endforeach
      @else
        <h4> No posts to view yet</h4>
      @endif
  </div>

</div>


@endsection
