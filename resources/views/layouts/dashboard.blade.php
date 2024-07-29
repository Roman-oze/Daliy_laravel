<!doctype html>
<html lang="en">

  @include('includes.head')

    <body class="sb-nav-fixed">



            @include('includes.nav')


            <div id="layoutSidenav">
                @include('includes.sidebar')
                <div id="layoutSidenav_content">
                   @yield('nav_content')
                </div>
            </div>

            @include('includes.footer')

            <script src="{{asset('asset/js/app.js')}}">
              @yield('script_list')
            </script>




    </body>

</html>
