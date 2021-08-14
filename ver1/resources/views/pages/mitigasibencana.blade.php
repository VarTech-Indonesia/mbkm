@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Mitigasi Bencana</h2>

                <p>
                   Walaupun dikaruniai sumber daya alam yang melimpah, Indonesia memiliki tantangan dalam menghadapi bencana baik yang disebabkan alam maupun yang lainnya. Oleh karena itu, ITB berkomitmen untuk meminimalkan efek negatif yang ditimbulkan dari peristiwa bencana di Indonesia. Program mitigasi bencana menjadi salah satu program penting dalam aktivitas MBKM ITB. Sudah sejak lama ITB terlibat dalam proyek-proyek kemanusiaan sebagai upaya mitigasi bencana di berbagai wilayah di Indonesia. 
                </p>
                <p>
                    Info lebih lanjut mengenai program Desa Binaan di ITB dapat diakses melalui tautan berikut :
                </p>
                <a href="https://www.lppm.itb.ac.id/category/pengabdian/pm-tanggap-bencana"><button type="button" class="btn btn-info">https://www.lppm.itb.ac.id/category/pengabdian/pm-tanggap-bencana</button>
                </a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-mitigasibencana.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection