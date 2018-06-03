<nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
       arial-expanded="false">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="/">Laravel Blog</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">

          <li class="{{ Request::is('/')? "active":""}}"><a href="{{ route('index') }}">Home</a></li>


          <li class="{{ Request::is('about')? "active":"" }}"><a href="{{ route('about') }}">About</a></li>


          <li class="{{ Request::is('contact')? "active":"" }}"><a href="{{route('contact')}}">Contact</a></li>

       </ul>
       <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">

                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                     My Account <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu">
                   <li>
                       <a href="{{route('posts.create')}}" class="{{Route::current()->getName() == "posts.create" ?"my_active":""}}">Create Post</a>
                   </li>
                   <li>
                       <a href="{{route('posts.index')}}" class="{{Route::current()->getName() == "posts.index" ?"my_active":""}}">Posts</a>
                   </li>
                 </ul>
             </li>


       </ul>

     </div>
    </div>
</nav>
