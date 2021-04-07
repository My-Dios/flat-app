@extends('foxtl.foxmaster')

@section('title')
    My Profile &#9679; UKM Bahasa-FLAT UIN Jakarta
@endsection

@section('navbar')
    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
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
<div class="container rounded bg-white mt-5">
    <form role="form" action='/profile' method='post' enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    @method('POST')
        <div class="row">

            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <div class="profile-img">
                        <img class="mt-5" src="{{asset('img/guest.png')}}" width="90">
                        <div class="file btn btn-lg btn-primary">
                            Change Picture
                            <input type="file" class="form-control-file" id="picture" name = 'picture' value="{{old('picture', '')}}" required>
                            <div class="invalid-feedback">
                                Please insert a picture here.
                            </div>
                            <div class="valid-feedback">
                                Nice Profile Picture!
                            </div>
                        </div>
                    </div>
                    <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                    <span class="text-black-50"></span>
                    <span></span>
                </div>
            </div>


            <div class="col-md-8">
                <div class="p-3 py-5">

                    <div class="row mt-2">
                        <div class="col-md-6"><h6>Name</h6></div>
                        <div class="col-md-6"><h6>E-mail Address</h6></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ Auth::user()->name }}" disabled></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="email_address" id="email_address" placeholder="example@gmail.com" value="{{ Auth::user()->email }}"  disabled></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><h6>Instagram Account</h6></div>
                        <div class="col-md-6"><h6>LinkedIn</h6></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="instagram_account" id="instagram_account" placeholder="Your Instagram Account" value=""></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Your link LinkedIn" value=""></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><h6>Phone Number</h6></div>
                        <div class="col-md-6"><h6>Institution</h6></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Your Phone Number" value=""></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="institution" id="institution" placeholder="Your Institution" value=""></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><h6>Full Address</h6></div>
                        <div class="col-md-12"><textarea name="full_address" id="full_address" class="form-control" cols="10" rows="3" placeholder="Your Address" value=""></textarea></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><h6>Motto</h6></div>
                        <div class="col-md-12"><textarea name="motton" id="motto" class="form-control" cols="10" rows="3" placeholder="Your Motto" value=""></textarea></div>
                    </div>

                    <div class="mt-5 text-right">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@endsection
