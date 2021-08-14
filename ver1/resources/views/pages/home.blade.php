@extends('layouts.master')

@section('content')
@include('partials.04-slider')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>MBKM ITB</h2>
                <p>
                    Program Merdeka Belajar-Kampus Merdeka (MBKM) merupakan sebuah program yang dirancang untuk
                    memberikan pengalaman pendidikan yang komprehensif kepada mahasiswa. Melalui program ini,
                    mahasiswa diharapkan dapat memiliki kompetensi unggul dan siap menjawab berbagai kebutuhan
                    masyarakat.</p>

                <p>Institut Teknologi Bandung (ITB), sebagai salah satu perguruan tinggi yang menyelenggarakan
                    program MBKM, memfasilitasi berbagai kegiatan yang dapat diikuti oleh seluruh mahasiswa,baik
                    mahasiswa ITB maupun non-ITB.</p>

                <p>Beberapa program unggulan MBKM yang dapat diikuti di antaranya Summer School, Desa Binaan,
                    Permata-Sakti, Bangkit, KKN Tematik, Program Kampus Merdeka, dan lain-lain.</p>

                <p>Program-program MBKM di ITB menawarkan pengalaman belajar yang holistik dan aplikatif. Dari hal
                    tersebut, program MBKM di ITB diharapkan dapat menjadi akselerator hubungan antara dunia akademik,
                    masyarakat, dan industri. Dengan demikian, tujuan pembangunan masyarakat Indonesia dapat diraih
                    dengan cepat sesuai dengan yang telah dicita-citakan.
                </p>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/bg-sec-1.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- end content -->
    @include('partials.06-info')
    @include('partials.07-berita')
    @include('partials.08-video')
@endsection