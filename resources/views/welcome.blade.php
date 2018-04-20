<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('theme.theme')
  <link rel="stylesheet" href="url('slidey/jquery.slidey.css')"/>
  <script type="text/javascript" src="{{ URL::asset('slidey/jquery.slidey.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('slidey/jquery.dotdotdot.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/holder.js') }}"></script>
  <!-- $this->output->set_template('triangle'); -->

</head>
<body>
  @include('includes.header')
       <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                  </div> 
                  </div>
                </div> -->
  @include('includes.footer')
</body>
</html>
