<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('_includes.head')
    <body>
        @include('_includes.navs.topnav1')
        <div class="container" style="min-height:600px;">
          @include('_includes.messages')
          <div class="row">
            @yield('content')
            <div class="col-md-3 col-md-offset-1">
              <h2>Side Bar</h2>
            </div>
          </div>

        </div>
        @include('_includes.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
  </html>
