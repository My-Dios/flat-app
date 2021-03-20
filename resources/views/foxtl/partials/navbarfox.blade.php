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
	    <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	    <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                {{-- <a class="navbar-brand" href="/">FLAT <br><span>UIN JAKARTA</span></a> --}}
	        	@yield('navbar')
	        </ul>
	    </div>
	</div>
</nav>
{{-- END Navbar --}}

