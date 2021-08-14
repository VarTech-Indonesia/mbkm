@extends('layout/menu')
@include('layout/menu-users')
@section('title','Pendaftaran - Akbid Cianjur')
@section('main-content')
<section id="about-pendaftaran">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-2">
                @yield('menu-users')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">
                        <strong><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Login Calon Mahasiswa</strong>
                    </div>
                    <form action="{{ route('admin-login') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Kesalahan Inputan :
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="email" class="form-control" placeholder="Masukan e-mail">
                                </div>
                            </div>
                            <div class="form-group" id="show_hide_password">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan password">
                                    <div class="input-group-text">
                                        <i class="fa fa-eye-slash" aria-hidden="true" onclick="showPassword()" style="cursor:pointer;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row text-center">
                                <div class="col-md">
                                    <div class="captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row text-center">
                                <div class="col-md">
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                            <p class="text-center">Belum punya akun? <a href="{{ url('daftar') }}">Daftar</a> sekarang!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('#reload').click(function() {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection('main-content')