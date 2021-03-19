<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">

            {{-- START Have a Questions? --}}
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
            	    <h2 class="ftco-heading-2">Have a Questions?</h2>
            	    <div class="block-23 mb-3">
	                <ul>
	                    <li><a href="https://www.google.com/maps/place/UKM+Bahasa-FLAT+UIN+Jakarta/@-6.3066001,106.7546005,17z/data=!4m5!3m4!1s0x2e69efdbdedb7d47:0x6c5a46f2a37599a6!8m2!3d-6.3066778!4d106.7547257?hl=en" target="_blank"><span class="icon icon-map-marker"></span><span class="text">Lt. 3 Gedung Student Center Jl. Ir. H. Djuanda No. 95, Cemp. Putih, Kec. Ciputat, Kota Tangerang Selatan, Banten 15412</span></a></li>
	                    <li><span class="icon icon-phone"></span><span class="text">+62 822 5822 4790</span></li>
	                    <li><span class="icon icon-envelope"></span><span class="text">flat@uinjkt.ac.id</span></li>
	                </ul>
	                </div>
                </div>
            </div>
            {{-- END Have a Questions? --}}

            {{-- START Recent News--}}
            {{-- <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent News</h2>
                    @forelse($post as $key => $post)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('/uploads/news/{{$post->picture}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/news/{{$post->id}}">{{substr($post->title, 0, 75)}}</a></h3>
                            <div class="meta">
                                <div><a href="/news/{{$post->id}}"><span class="icon-calendar"></span> {{$post->created_at}}</a></div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('img/default-150x150.png')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Title</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> timestamp</a></div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div> --}}
            {{-- END Recent News--}}

            {{-- START Recent News default--}}
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent News</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('img/default-150x150.png')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Title</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> timestamp</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('img/default-150x150.png')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Title</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> timestamp</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END Recent News default--}}

            {{-- START Explore --}}
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li><a href="/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="/Course"><span class="ion-ios-arrow-round-forward mr-2"></span>Courses</a></li>
                        <li><a href="/news"><span class="ion-ios-arrow-round-forward mr-2"></span>News</a></li>
                    </ul>
                </div>
            </div>
            {{-- END Explore --}}

            {{-- START Subs and Connect --}}
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
            	    <h2 class="ftco-heading-2">Subscribe Us!</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
                <div class="ftco-footer-widget mb-5">
            	    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/FLATUINJAKARTA" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/flatuinjakarta" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/flatuinjakarta/" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.youtube.com/user/ukmbahasaflat" target="_blank"><span class="icon-youtube"></span></a></li>
                    </ul>
                </div>
                </div>
            </div>
            {{-- END Subs and Connect --}}

            {{-- START Copyright --}}
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.instagram.com/flatuinjakarta/" target="_blank">UKM Bahasa-FLAT UIN Jakarta</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            {{-- END Copyright --}}
    </div>
</footer>
