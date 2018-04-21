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
  @include('contain.carosel_berita')
  @include('includes.footer')
</body>
</html>
