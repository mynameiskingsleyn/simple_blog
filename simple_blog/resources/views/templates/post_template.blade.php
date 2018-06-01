<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('_includes.head')
    <body>
        @include('_includes.navs.topnav1')
            @include('_includes.messages')
            @yield('content')


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
