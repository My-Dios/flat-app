@extends('foxtl.foxmaster')

@section('title')
    News UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	<li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
	<li class="nav-item active"><a href="/news" class="nav-link">News</a></li>
@endsection

@section('content')
{{-- START jumbotron --}}
    {{-- @forelse($post as $key => $post) --}}
    {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('/uploads/news/{{$post->picture}}');"> --}}
    {{-- @empty --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('foxtl/images/bg_1.jpg')}}');">
    {{-- @endforelse --}}
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">News</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>News <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
{{-- END jumbotron --}}

{{-- START news --}}
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">

            @forelse($post as $key => $post)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="/news/{{$post->id}}" class="block-20 d-flex align-items-end" style="background-image: url('/uploads/news/{{$post->picture}}');">
				        <div class="meta-date text-center p-2">
                            <span class="yr">{{$post->created_at}}</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="/news/{{$post->id}}">{{substr($post->title, 0, 75)}}</a></h3>
                        <p>{{substr($post->openingsentence, 0, 150)}}...</p>
                        <div class="d-flex align-items-center mt-4">
	                        <p class="mb-0"><a href="/news/{{$post->id}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                        <p class="ml-auto mb-0">
	                	        <a href="/" class="mr-2">FLAT UIN Jakarta</a>
	                	    </p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="/news" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('/uploads/news/default.jpg')}}');">
						<div class="meta-date text-center p-2">
                            <span class="yr">timestamp</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="/news">Enter Your Title</a></h3>
                        <p>Enter Opening Sentence</p>
                        <div class="d-flex align-items-center mt-4">
	                        <p class="mb-0"><a href="/news" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                        <p class="ml-auto mb-0">
	                	        <a href="/" class="mr-2">FLAT UIN Jakarta</a>
	                        </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse

          </div>
        </div>
	</div>
</section>
{{-- END news --}}
@endsection
