{{-- START Header --}}
<div class="bg-top navbar-light">
    <div class="container">
    	<div class="row no-gutters d-flex align-items-center align-items-stretch">
    		<div class="col-md-4 d-flex align-items-center py-4">
    			<img src="{{asset('img/LOGO_UIN_SYARIF_HIDAYATULLAH_JAKARTA.png')}}" alt="Logo FLAT UIN Jakarta" width="75px">
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
                    <div class="col-md-4 topper d-flex align-items-center py-4 justify-content-end">
					    <img src="{{asset('img/flaticon.png')}}" alt="Logo FLAT UIN Jakarta" width="90px">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- END Header --}}

{{-- START Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center px-4">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>
	    <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	@yield('navbar')
	        </ul>
	    </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @yield('navbarauth')
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" ><span class="icon-user"></span></div>
                </li>
                @endguest
            </ul>
        </div>
	</div>
</nav>
{{-- END Navbar --}}



