@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>PKKM ITB</h2>
                <p>
                    Sesuai dengan Permendikbud No 3 Tahun 2020, melalui program Kampus Merdeka, mahasiswa
                    memiliki
                    hak untuk memperoleh pendidikan di luar program studi selama tiga semester. Program ini
                    diharapkan dapat meningkatkan pengetahuan kepada mahasiswa dalam menjawab tantangan dunia
                    nyata
                    secara holistik dan aplikatif.
                </p>
                <p>
                    Persyaratan umum yang harus dipenuhi agar mahasiswa dapat mengikuti program ini di
                    antaranya:
                    1. berasal dari program studi yang telah terakreditasi
                    2. merupakan mahasiswa aktif yang terdaftar di PDDikti.
                </p>
                <p>
                    Kegiatan-kegiatan yang dapat diikuti melalui program ini di antaranya pertukaran pelajar,
                    magang/praktik kerja, asistensi mengajar di satuan pendidikan, penelitian/riset, proyek
                    kemanusiaan, kegiatan wirausaha, studi/proyek independen, membangun desa/kuliah kerja nyata
                    tematik.
                </p>
                <p>
                    Info lebih lanjut terkait program PKKM yang diselenggarakan ITB dapat diakses melalui tautan
                    berikut.
                </p>
                <a href="https://pkkmdikti.kemdikbud.go.id"><button type="button" class="btn btn-info">https://pkkmdikti.kemdikbud.go.id</button></a>
            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-pkkm.png') }}" alt="" class="img-fluid">
               </div>
        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection