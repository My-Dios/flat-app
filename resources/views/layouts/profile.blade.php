@extends('foxtl.foxmaster')

@section('title')
    My Profile UKM Bahasa-FLAT UIN Jakarta
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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
@endsection

@section('content')
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="{{asset('img/guest.png')}}" width="90">
                <span class="font-weight-bold">John Doe</span>
                <span class="text-black-50">john_doe</span>
                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="row mt-2">
                    <div class="col-md-6"><h6>Full Name</h6></div>
                    <div class="col-md-6"><h6>Email</h6></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="full_name" id="full_name" placeholder="Your Full Name" value="Yusuf Wijaya"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com" value="yusufwijaya3@gmail.com"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><h6>Instagram Account</h6></div>
                    <div class="col-md-6"><h6>LinkedIn</h6></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="instagram_account" id="instagram_account" placeholder="Your Instagram Account" value="suf_212"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Your link LinkedIn" value="https://www.linkedin.com/in/yusuf-wijaya-a92467148/"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><h6>Phone Number</h6></div>
                    <div class="col-md-6"><h6>Institution</h6></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Your Phone Number" value="0895394755672"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="institution" id="institution" placeholder="Your Institution" value="UIN Syarif Hidayatullah Jakarta"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><h6>Full Address</h6></div>
                    <div class="col-md-12"><textarea name="full_address" id="full_address" class="form-control" cols="10" rows="3" placeholder="Your Address" value="">Jl. Dara 1. No 11. Dg 2. RT 01. Rw 11. Vila Pamulang. Pondok petir KOTA DEPOK - BOJONGSARI JAWA BARAT ID 16517</textarea></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><h6>Motto</h6></div>
                    <div class="col-md-12"><textarea name="motton" id="motto" class="form-control" cols="10" rows="3" placeholder="Your Address" value="">Ikhtiar, Tawakkal, Sedekah</textarea></div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
@endsection
