@extends('foxtl.foxmaster')

@section('title')
    Course UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	<li class="nav-item active"><a href="/course" class="nav-link">Courses</a></li>
	<li class="nav-item"><a href="/news" class="nav-link">News</a></li>
@endsection

@section('content')
    {{-- START jumbotron --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('foxtl/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    {{-- END jumbotron --}}

    {{-- START course --}}
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{asset('foxtl/images/course-7.jpg')}});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
				</div>
			</div>
	</section>
    {{-- END course --}}
@endsection
