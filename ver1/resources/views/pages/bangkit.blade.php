@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Google Bangkit</h2>
                <p>
                    Google Bangkit merupakan salah satu program MBKM yang bertujuan meningkatkan kemampuan
                    komputasional kepada mahasiswa di Indonesia. Program ini memiliki luaran agar tingkat
                    literasi dan keahlian komputer mahasiswa Indonesia tinggi dan mampu menjawab kebutuhan
                    masyarakat Indonesia yang semakin terotomatisasi di masa yang akan datang.
                </p>
                <p>
                    Program ini didukung oleh berbagai perusahaan teknologi ternama dunia, seperti Google,
                    Gojek, Tokopedia, Traveloka, dan Deeptech Foundation. Melalui program ini, mahasiswa diajak
                    untuk mengenal secara langsung bagaimana industri teknologi bekerja dan menjawab persoalan
                    di masyarakat.
                </p>
                <p>
                    Program-program pendidikan yang diberikan antara lain machine learning, sistem perangkat
                    lunak Android, komputasi awan (cloud), metodologi berpikir desain, dan komunikasi. Program
                    ini juga memberikan dana hibah bagi proyek-proyek yang dipandang potensial untuk
                    dikembangkan lebih lanjut dalam skala industri. Program ini sangat cocok diikuti mahasiswa
                    yang memiliki ketertarikan dalam bidang teknologi.
                </p>
                <p>
                    Info lebih lanjut terkait program Bangkit yang diselenggarakan ITB dapat diakses melalui
                    tautan
                    berikut.
                </p>
                <a href="https://pkkmdikti.kemdikbud.go.id"><button type="button" class="btn btn-info">https://pkkmdikti.kemdikbud.go.id</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-googlebangkit.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection