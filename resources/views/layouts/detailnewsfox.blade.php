@extends('foxtl.foxmaster')

@section('title')
    News UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	<li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
	<li class="nav-item active"><a href="/news" class="nav-link">News</a></li>
@endsection

@section('navbarauth')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link">&#8726</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @endif
@endsection


@section('content')
{{-- START jumbotron --}}
<section class="hero-wrap hero-wrap-2" style="background-image:url('/uploads/news/{{$post->picture}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">News</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>News <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
{{-- END jumbotron --}}

{{-- START Detail News --}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$post->title}}</h2>
            <p class="text-justify">{{$post->openingsentence}}</p>
            <p>
              <img src="/uploads/news/{{$post->picture}}" alt="{{$post->title}}" class="img-fluid">
            </p>
            <p class="text-justify">{!! $post->description !!}</p>
            <p class="mb-0"><a href="/news" class="btn btn-primary"><span class="ion-ios-arrow-round-back"> Back to News</a></p>
          </div>
        </div>
	</div>
</section>
{{-- END Detail News --}}
@endsection
