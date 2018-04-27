    <!-- header starts here -->
    <header id="header">      
    	<div class="navbar navbar-inverse" role="banner">
    		<div class="container">
    			<div class="navbar-header" >
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="{{url('/')}}">
    					<h1>
    						<img class="img-responsive visible-xs"  src="{{ asset('images/logo_web_BN7.png') }}"  alt="logo">
    						<img class="img-responsive visible-lg"  src="{{ asset('images/logo_web_BN4.png') }}"  alt="logo">
    						<img class="img-responsive visible-sm visible-md" src="{{ asset('images/logo_web_BN5.png') }}" alt="logo"/>
    					</h1>
    				</a>
    			</div>
    			<div class="collapse navbar-collapse" style="margin-top: 40px;">
    				<ul class="nav navbar-nav navbar-right">
    					<li><a href="{{ route('berita') }}"><b>Berita</b></a></li>
    					<li><a href="{{ route('laguWajib') }}" ><b>Lagu Wajib</b></a></li>                   
    					<li><a href="{{ route('materi') }}"><b>Materi</b> </a></li>
    					<li><a href="{{ route('artikel') }}"><b>Artikel</b></a></li> 
    					<li><a href="{{ route('permainan') }}"><b>Permainan</b></a></li>
    					<li>
    						<!-- Log In -->
    						@if (Route::has('login'))
    						<!-- <div class="top-right links"> -->
    							@auth
    							<a href="{{ url('/home') }}"><b>Home</b></a>
    							@else
    							<a href="{{ route('login') }}"><b>Login</b></a>
    							<!-- <a href="{{ route('register') }}"><b>Register</b></a> -->
    							@endauth
    							<!-- </div> -->
    							@endif
    							<!-- </b></a> --></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</header>
    <!--/#header-->