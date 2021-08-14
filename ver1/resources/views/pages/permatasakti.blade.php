@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Permata Sakti</h2>
                <p>
                    Program Pertukaran Mahasiswa Tanah Air Nusantara-Sistem Alih Kredit Dengan Teknologi
                    Informasi (Permata-Sakti) merupakan salah satu program MBKM yang diselengarakan melalui
                    kerja sama antara perguruan tinggi se-Indonesia. Program ini bertujuan memberikan pengalaman
                    belajar yang baru kepada mahasiswa di berbagai kampus di Indonesia. Dari hal tersebut
                    mahasiswa diberi kesempatan untuk mahasiswa untuk mendapatkan pengalaman belajar di
                    perguruan tinggi lain yang sesuai dengan potensi, minat, dan bakat yang dimiliki.
                </p>
                <p>
                    Melalui program ini, mahasiswa dapat mengambil mata-mata kuliah unggul yang dimiliki oleh
                    berbagai universitas di Indonesia. Program ini menggunakan metode pengalihan angka kredit
                    dan pemerolehan angka kredit yang dapat dilakukan antarprogram studi yang sama ataupun yang
                    berbeda.
                </p>
                <p>
                    Info lebih lanjut terkait program Permata-Sakti yang diselenggarakan ITB dapat diakses
                    melalui tautan
                    berikut.
                </p>
                <a href="https://pkkmdikti.kemdikbud.go.id"><button type="button" class="btn btn-info">https://pkkmdikti.kemdikbud.go.id</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-permatasakti.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection