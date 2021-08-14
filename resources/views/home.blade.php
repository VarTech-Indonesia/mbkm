@section('title','Pendaftaran - Merdeka ITB')
@extends('layout/menu')
@include('layout/menu-users-login')
@include('layout/isi-user-pendaftaran')
@section('main-content')
<section id="about-pendaftaran">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-2">
                @yield('menu-users-login')
            </div>
            <div class="col-md-9">
                <div class="card text-center">
                    <div class="card-header">
                        <h3></h3>
                    </div>
                    <div class="card-body">
                        <h5>
                            <img src="{{asset('storage/'.Auth::user()->image)}}" alt="image-1" width="100" /> <br />
                            <strong>{{ Auth::user()->nama }}</strong>
                            @yield('isi-user-pendafataran')
                        </h5>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection('main-content')