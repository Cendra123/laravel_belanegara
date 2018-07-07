@extends('layouts.default')

@section('content')

<header>
	<link rel="stylesheet" type="text/css" href="{{asset('slidey/jquery.slidey.css')}}">
	<script type="text/javascript" src="{{ asset('slidey/jquery.slidey.js') }}"></script>
	<script type="text/javascript" src="{{ asset('slidey/jquery.dotdotdot.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/holder.js') }}"></script>
</header>
@include('contain.carousel_berita')
@include('contain.artikel_berita_terkini');
@include('contain.layanan_web2');
@stop

  