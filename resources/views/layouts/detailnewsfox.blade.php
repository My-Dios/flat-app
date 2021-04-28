@extends('foxtl.foxmaster')

@section('title')
    News &#9679; UKM Bahasa-FLAT UIN Jakarta
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
    <li class="mr-6 nav-item">
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

{{-- START Comments Section--}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
            <div class="col-lg-8 ftco-animate">
                {{-- START Comments--}}
                <h3 class="mb-5 h4 font-weight-bold">Comments</h3>
                <ul class="comment-list">
                    <li class="comment">
                        <div class="vcard bio">
                            <img src="{{asset('foxtl/images/teacher-1.jpg')}}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        </div>
                    </li>
                </ul>
                {{--END Comments--}}
                {{--START Leave Comment--}}
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5 h4 font-weight-bold">Leave a Comment</h3>
                    <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                            <label for="message">Comment</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                        </div>
                    </form>
                </div>
                {{--END Leave Comment--}}
            </div>
        </div>
	</div>
</section>
{{-- END Comments Section--}}
@endsection

{{-- START Comments Section--}}
{{-- <section class="ftco-section">
	<div class="container">
		<div class="row">
            <div class="col-lg-8 ftco-animate">

                <h3 class="mb-5 h4 font-weight-bold">Comments</h3>
                <ul class="comment-list">
                    <li class="comment">
                        <div class="vcard bio">
                            <img src="{{asset('foxtl/images/teacher-1.jpg')}}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        </div>
                    </li>
                </ul>

                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                    <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                            <label for="message">Comment</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
	</div>
</section> --}}
{{-- END Comments Section--}}
