@extends('foxtl.foxmaster')

{{-- @section('title')
    News &#9679; UKM Bahasa-FLAT UIN Jakarta
@endsection --}}

{{-- @section('navbar')
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
@endsection --}}


@section('content')
{{-- START jumbotron --}}
<section class="hero-wrap hero-wrap-2" style="background-image:url('/images/uploads/news/{{$post->picture}}');">
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

{{-- START Detail News --}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{$post->title}}</h2>
                <p class="text-justify">{{$post->openingsentence}}</p>
                <p>
                    <img src="/images/uploads/news/{{$post->picture}}" alt="{{$post->title}}" class="img-fluid">
                </p>
                <p class="text-justify">{!! $post->description !!}</p>
                <p class="mb-0"><a href="/news" class="btn btn-primary"><span class="ion-ios-arrow-round-back"> Back to News</a></p>
            </div>
            {{-- Start Side --}}
            <div class="col-lg-4 sidebar ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Category</h3>
                    <ul class="categories">
                        <li><a href="#">Art <span>(6)</span></a></li>
                        <li><a href="#">Sports <span>(8)</span></a></li>
                        <li><a href="#">Language <span>(2)</span></a></li>
                        <li><a href="#">Food <span>(2)</span></a></li>
                        <li><a href="#">Music <span>(2)</span></a></li>
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Popular Articles</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <ul class="tagcloud m-0 p-0">
                        <a href="#" class="tag-cloud-link">School</a>
                        <a href="#" class="tag-cloud-link">Kids</a>
                        <a href="#" class="tag-cloud-link">Nursery</a>
                        <a href="#" class="tag-cloud-link">Daycare</a>
                        <a href="#" class="tag-cloud-link">Care</a>
                        <a href="#" class="tag-cloud-link">Kindergarten</a>
                        <a href="#" class="tag-cloud-link">Teacher</a>
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Archives</h3>
                    <ul class="categories">
                        <li><a href="#">December 2018 <span>(30)</span></a></li>
                        <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                        <li><a href="#">September 2018 <span>(6)</span></a></li>
                        <li><a href="#">August 2018 <span>(8)</span></a></li>
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>
            {{-- End Side --}}
        </div>
	</div>
</section>
{{-- END Detail News --}}

{{-- START Detail News Backup--}}
{{-- <section class="ftco-section">
	<div class="container">
		<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$post->title}}</h2>
            <p class="text-justify">{{$post->openingsentence}}</p>
            <p>
              <img src="/images/uploads/news/{{$post->picture}}" alt="{{$post->title}}" class="img-fluid">
            </p>
            <p class="text-justify">{!! $post->description !!}</p>
            <p class="mb-0"><a href="/news" class="btn btn-primary"><span class="ion-ios-arrow-round-back"> Back to News</a></p>
          </div>
        </div>
	</div>
</section> --}}
{{-- END Detail News Backup--}}

{{-- START Comments Section--}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
            <div class="col-lg-8 ftco-animate">
                {{-- START Comments--}}
                <h3 class="mb-5 h4 font-weight-bold">Comments</h3>
                <ul class="comment-list">
                    @forelse ($post->comments as $key => $comment)
                        <li class="comment">
                            @if ($comment->author->profile == null || $comment->author->profile->profilepicture == null)
                                <img style="border-radius:50%; border: 2px solid #fd5f01;" border-radius="50%" src="{{asset('images/icon/guesticon.png')}}" alt="Profile Guest" title="Profile Picture Guest" width="65" height="65" loading="lazy">
                            @else
                                <img style="border-radius:50%; border: 2px solid #fd5f01;" border-radius="50%" src="/images/uploads/pp/{{$comment->author->profile->profilepicture}}" alt="Profile Picture" width="65" height="65" loading="lazy">
                            @endif
                            <div class="comment-body">
                                <h3>{{$comment->author->name}}</h3>
                                <div class="meta">{{$comment->created_at}}</div>
                                {{$comment->body}}
                            </div>
                        </li>
                    @empty
                        <tr>
                            <td colspan="4" align="center"> No Comments</td>
                        </tr>
                    @endforelse
                </ul>
                {{--END Comments--}}
                {{--START Leave Comment--}}
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5 h4 font-weight-bold">Leave a Comment</h3>
                    <form action="/comment" class="p-5 bg-light" method='post' enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="post" value="{{$post->id}}" />
                        <div class="form-group">
                            <label for="body">Comment</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                            @error('body')
                            <div class="alert alert-danger">
                               Please fill your comment up to 250 characters.
                            </div>
                            @enderror
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
