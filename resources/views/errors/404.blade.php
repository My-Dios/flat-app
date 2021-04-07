@extends('foxtl.foxmaster')

@section('title')
    404 Not Found &#9679; UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	<li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
	<li class="nav-item"><a href="/news" class="nav-link">News</a></li>
@endsection

@section('navbarauth')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link">&#8726</a>
    </li>
        @if (Route::has('register'))
        <li class="mr-6 nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
@endsection

@section('content')
    {{-- START Desc --}}
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('img/rame2.JPG')}});" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    			    <div class="img img-video d-flex align-items-center" style="background-image: url({{asset('img/notfound.png')}});">
    					    <div class="video justify-content-center">
							    <a href="https://www.youtube.com/watch?v=OwvPaMolTFU" class="icon-video popup-vimeo d-flex justify-content-center align-items-center bg-transparent">
								    <span class="ion-ios-play"></span>
		  					    </a>
						    </div>
    				    </div>
    			    </div>
                    <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                        <br><br><br><br>
                        <h2 class="mb-4">404 Not Found</h2>
                        <p>it looks like the page you are looking for is not here, please go to the page we have provided ^_^</p>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
    	</div>
    </section>
    {{-- END Desc --}}
@endsection
