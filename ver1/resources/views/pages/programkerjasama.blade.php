@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Program Kerjasama</h2>

                <!-- <p>
                    Program Desa Binaan merupakan salah satu dari program pengabdian masyarakat dan MBKM ITB
                    yang bertujuan meningkatkan ketahanan hidup perdesaan baik dari segi ekonomi, kesehatan,
                    maupun yang lainnya. Program ini didesain dengan penerapan ipteks dalam menjawab berbagai
                    kebutuhan masyarakat oleh para dosen di ITB. Program ini bekerja sama dengan komunitas
                    masyarakat setempat dan dapat diikuti oleh mahasiswa ITB. Sejak tahun 2015, tercatat ada
                    tujuh wilayah di Indonesia yang mengikuti program Desa Binaan.
                </p>
                <p>
                    Info lebih lanjut mengenai program Desa Binaan di ITB dapat diakses melalui tautan berikut :
                </p>
                <a href="https://issuu.com/lppmitb/docs/bakti_kami_di_pelosok_
                        negeri_fin_-_medres-4jan_par"><button type="button" class="btn btn-info">https://issuu.com/lppmitb/docs/bakti_kami_di_pelosok_
                        negeri_fin_-_medres-4jan_par</button></a> -->

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('#') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection