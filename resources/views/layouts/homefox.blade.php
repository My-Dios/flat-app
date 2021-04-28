@extends('foxtl.foxmaster')

@section('title')
    Home &#9679; UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
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
    <!-- START jumbotron -->
    <section class="home-slider owl-carousel">
        @forelse($postjumbotron as $key => $postjumbotron)
        <div class="slider-item" style="background-image:url('/uploads/jumbotrons/{{$postjumbotron->picture}}');">
      	    <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters text-{{$postjumbotron->textalign}} slider-text align-items-center justify-content-{{$postjumbotron->justifycontent}}" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">
                        <h1 class="mb-4">{{$postjumbotron->title}}</h1>
                        <p>{{$postjumbotron->sentence}}</p>
                        <p><a href="{{$postjumbotron->btnlink}}" class="btn btn-primary px-4 py-3 mt-3" target="_blank">{{$postjumbotron->btnname}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h3 class="">There are no posts</h3>
            </div>
        </div>
        @endforelse
    </section>
    <!-- END jumbotron -->

    {{-- START Pilar --}}
    <section class="ftco-services ftco-no-pb">
        			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-2 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Discipline</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Kinship</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Languages</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Responsibility</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Responsiveness</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>

        </div>
			</div>
	</section>
    {{-- END Pilar --}}

    {{-- START What we do --}}
	<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url({{asset('img/topik.JPG')}}); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Vision</h2>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<br><h2 class="mb-4">Mission</h2>
                        <div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>Safety First</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Regular Classes</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Certified Teachers</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Sufficient Classrooms</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Creative Lessons</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>Sports Facilities</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
    {{-- END What we do --}}

    {{-- START Desc --}}
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('img/rame2.JPG')}});" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url({{asset('img/botak.jpeg')}});">
    					<div class="video justify-content-center">

								<a href="https://www.youtube.com/watch?v=psFxjZHUiIw" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Fox University</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="2000">0</strong>
		                <span>Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Courses</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
    {{-- END Desc --}}

    {{-- START Desc 2 --}}
    <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate fadeInUp ftco-animated">
          	            <h2 class="mb-4">Fox University Stablished Since 1960</h2>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
					</div>
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url({{asset('foxtl/images/about.jpg')}}); border"></div>
					</div>
				</div>
			</div>
	</section>
    {{-- END Desc 2 --}}

    {{-- START Course --}}
	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Our</span> Courses</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>

                    {{-- START Languege --}}
                    <div>
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-8 text-center heading-section ftco-animate">
                                <h2 class="mb-4">Language</h2>
                            </div>
                        </div>
			            <div class="row justify-content-around">
                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-1.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">English</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-2.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Arabic</a></h3>
                                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-3.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Japanese</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Mandarin</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Spanish</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Korean</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">German</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- END Languege --}}

                    {{-- START Skills --}}
                    <div>
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-8 text-center heading-section ftco-animate">
                                <h2 class="mb-4">Skills</h2>
                            </div>
                        </div>
			            <div class="row justify-content-around">
                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-1.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">English Debate</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-1.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">English Speech</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Arabic Debate</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Arabic Speech</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-2.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Master of Caremony</a></h3>
                                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-3.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">Scrabble</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                            <div class="col-md-3 course ftco-animate">
                                <div class="img" style="background-image: url({{asset('foxtl/images/course-4.jpg')}});"></div>
                                <div class="text pt-4">
                                    <p class="meta d-flex">
                                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                        <span><i class="icon-table mr-2"></i>10 seats</span>
                                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                                    </p>
                                    <h3><a href="#">FLATari</a></h3>
                                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- END Skills --}}
			</div>
		</div>
	</section>
    {{-- END Course --}}

    {{-- START Certified Teachers --}}
	<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Certified Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('foxtl/images/teacher-1.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Bianca Wilson</h3>
								<span class="position mb-2">Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{{asset('foxtl/images/teacher-2.jpg')}}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mitch Parker</h3>
								<span class="position mb-2">English Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('foxtl/images/teacher-3.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Stella Smith</h3>
								<span class="position mb-2">Art Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('foxtl/images/teacher-4.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Monshe Henderson</h3>
								<span class="position mb-2">Science Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
    {{-- END Certified Teachers --}}

    {{-- START Recent News --}}
	<section class="ftco-section bg-light">
		<div class="container">

		    <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Recent</span> News</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
		    <div class="row">

                @forelse($post as $key => $post)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="/flatnews/{{$post->id}}" class="block-20 d-flex align-items-end" style="background-image: url('/uploads/news/{{$post->picture}}');">
                            <div class="meta-date text-center p-2">
                                <span class="yr">{{$post->created_at}}</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="/flatnews/{{$post->id}}">{{substr($post->title, 0, 75)}}</a></h3>
                             <p>{{substr($post->openingsentence, 0, 150)}}...</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="/flatnews/{{$post->id}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="/" class="mr-2">FLAT UIN Jakarta</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h3 class="">There are no posts</h3>
                    </div>
                </div>
                @endforelse

            </div>
        </div>

		</div>
	</section>
    {{-- END Recent News --}}

    {{-- START Testimoni --}}
	<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Student Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('img/botak.jpeg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('foxtl/images/teacher-2.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('foxtl/images/teacher-3.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('foxtl/images/teacher-4.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('foxtl/images/teacher-1.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END Testimoni --}}

    {{-- START galery --}}
	<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="{{asset('foxtl/images/image_1.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('foxtl/images/course-1.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{asset('foxtl/images/image_2.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('foxtl/images/image_2.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{asset('foxtl/images/image_3.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('foxtl/images/image_3.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{asset('foxtl/images/image_4.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('foxtl/images/image_4.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
            </div>
    	</div>
    </section>
    {{-- END galery --}}
@endsection
