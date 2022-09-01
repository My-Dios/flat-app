{{-- START Header --}}
<div class="bg-top navbar-light">
    <div class="container">
    	<div class="row no-gutters d-flex align-items-center align-items-stretch">
    		<div class="col-md-2 d-flex align-items-center py-4">
    			<img src="{{asset('images/icon/uinjakartaicon.png')}}" alt="Logo UIN Jakarta" width="75px">
    		</div>
            <div class="col-md-2 d-flex align-items-end py-4">
    			<img src="{{asset('images/icon/flaticon.png')}}" alt="Logo FLAT UIN Jakarta" width="90px">
    		</div>
	    	<div class="col-lg-8 d-block">
		    	<div class="row d-flex">
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    <div class="text">
					    	<span>Email</span>
						    <span>flat@uinjkt.ac.id</span>
						</div>
					</div>
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						<div class="text">
						    <span>Call</span>
						    <span>+62 822 5822 4790</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- END Header --}}

{{-- START Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	<div class="container-fluid-navigasi-bar align-items-center px-4">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>
	    <div class="ml-7 collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                {{-- @yield('navbar') --}}
                <li class="nav-item {{($title === "Home") ? "active" : ""}}"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item {{($title === "Course") ? "active" : ""}}"><a href="/#" class="nav-link">Courses</a></li>
                <li class="nav-item {{($title === "Flatmart") ? "active" : ""}}"><a href="/#" class="nav-link">Flatmart</a></li>
                <li class="nav-item {{($title === "News") ? "active" : ""}}"><a href="/news" class="nav-link">News</a></li>
                <li class="nav-item {{($title === "Events") ? "active" : ""}}"><a href="/#" class="nav-link">Events</a></li>
                <li class="nav-item dropdown disabled {{($title === "About") ? "active" : ""}}"> <a href="/#" class="nav-link dropdown-toggle">About</a>
                    <div class="dropdown-menu dropdown-menu bg-white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                           Soon
                        </a>
                        {{-- <a class="dropdown-item" href="#">
                           Vision
                        </a>
                        <hr>
                        <a class="dropdown-item" href="#">
                           Mision
                        </a> --}}
                    </div>
                </li>
                <li class="nav-item dropdown disabled {{($title === "Service") ? "active" : ""}}"> <a href="/#" class="nav-link dropdown-toggle">Service</a>
                    <div class="dropdown-menu dropdown-menu bg-white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                           Soon
                        </a>
                    </div>
                </li>
	        </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mr-6">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item {{($title === "Login") ? "active" : ""}}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">&#8726</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item {{($title === "Register") ? "active" : ""}}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                {{-- @yield('navbarauth') --}}
                @else
                <li class=" nav-item dropdown {{($title === "MyProfile") ? "active" : ""}}">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret icon-user"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-white" aria-labelledby="navbarDropdown">

                        <div class="text-center dropdown-item">
                            @if (Auth::User()->profile == null || Auth::User()->profile->profilepicture == null)
                                <img style="border-radius:50%; border: 3px solid #fd5f01;" border-radius="50%" src="{{asset('images/icon/guesticon.png')}}" alt="{{Auth::user()->name}}" title="{{Auth::User()->name}}" width="65" height="65" loading="lazy">
                            @else
                                <img style="border-radius:50%; border: 3px solid #fd5f01;" border-radius="50%" src="/images/uploads/pp/{{Auth::user()->profile->profilepicture}}" alt="{{Auth::user()->name}}" title="{{Auth::User()->name}}" width="65" height="65" loading="lazy">
                            @endif
                            <div class="mt-1">{{ Auth::user()->name }}</div>
                            <a class="info" href="/profile">My Profile</a>
                        </div>

                        <hr>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3 2C2.44772 2 2 2.44772 2 3V21C2 21.5523 2.44772 22 3 22H12C12.5523 22 13 21.5523 13 21V16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16V20H4V4H11V8C11 8.55228 11.4477 9 12 9C12.5523 9 13 8.55228 13 8V3C13 2.44772 12.5523 2 12 2H3Z" fill="#333333"></path> <path d="M17.7071 7.29289C17.3166 6.90237 16.6834 6.90237 16.2929 7.29289C15.9024 7.68342 15.9024 8.31658 16.2929 8.70711L18.5858 11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H18.5858L16.2929 15.2929C15.9024 15.6834 15.9024 16.3166 16.2929 16.7071C16.6834 17.0976 17.3166 17.0976 17.7071 16.7071L21.7071 12.7071C22.0976 12.3166 22.0976 11.6834 21.7071 11.2929L17.7071 7.29289Z" fill="#333333"></path></svg>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
                @endguest
            </ul>
	    </div>

	</div>
</nav>
{{-- END Navbar --}}

{{-- START Navbar Backup--}}
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	<div class="container-fluid-navigasi-bar d-flex align-items-center px-4">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>
	    <div class="ml-7 collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	@yield('navbar')
	        </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mr-6">
                <!-- Authentication Links -->
                @guest
                @yield('navbarauth')
                @else
                <li class=" nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret icon-user"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-white" aria-labelledby="navbarDropdown">

                        <div class="text-center dropdown-item">
                            @if (Auth::User()->profile == null || Auth::User()->profile->profilepicture == null)
                                <img style="border-radius:50%; border: 3px solid #fd5f01;" border-radius="50%" src="{{asset('images/icon/guesticon.png')}}" alt="{{Auth::user()->name}}" title="{{Auth::User()->name}}" width="65" height="65" loading="lazy">
                            @else
                                <img style="border-radius:50%; border: 3px solid #fd5f01;" border-radius="50%" src="/images/uploads/pp/{{Auth::user()->profile->profilepicture}}" alt="{{Auth::user()->name}}" title="{{Auth::User()->name}}" width="65" height="65" loading="lazy">
                            @endif
                            <div class="mt-1">{{ Auth::user()->name }}</div>
                            <a class="info" href="/profile">My Profile</a>
                        </div>

                        <hr>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3 2C2.44772 2 2 2.44772 2 3V21C2 21.5523 2.44772 22 3 22H12C12.5523 22 13 21.5523 13 21V16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16V20H4V4H11V8C11 8.55228 11.4477 9 12 9C12.5523 9 13 8.55228 13 8V3C13 2.44772 12.5523 2 12 2H3Z" fill="#333333"></path> <path d="M17.7071 7.29289C17.3166 6.90237 16.6834 6.90237 16.2929 7.29289C15.9024 7.68342 15.9024 8.31658 16.2929 8.70711L18.5858 11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H18.5858L16.2929 15.2929C15.9024 15.6834 15.9024 16.3166 16.2929 16.7071C16.6834 17.0976 17.3166 17.0976 17.7071 16.7071L21.7071 12.7071C22.0976 12.3166 22.0976 11.6834 21.7071 11.2929L17.7071 7.29289Z" fill="#333333"></path></svg>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
                @endguest
            </ul>
	    </div>

	</div>
</nav> --}}
{{-- END Navbar Backup--}}



