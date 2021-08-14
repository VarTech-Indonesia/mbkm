@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Summer School</h2>

                <p>
                    Program Summer School merupakan salah satu program MBKM ITB yang diselenggarakan untuk
                    memberikan suasana pendidikan internasional kepada seluruh mahasiswa. Program ini selain
                    dapat diikuti oleh mahasiswa nasional, juga dapat diikuti oleh mahasiswa internasional dari
                    berbagai universitas di dunia. Program ini bertujuan memberikan pendidikan global dengan
                    menhadirkan berbagai pakar dan praktisi, baik dari ITB maupun internasional dalam bidang
                    masing-masing.</p>
                <p>
                    Dengan demikian, mahasiswa dapat secara langsung merasakan bagaimana berinteraksi dalam
                    dunia pendidikan secara global dan dinamis. Program ini memiliki tema-tema menarik yang
                    dapat meningkatkan wawasan keilmuan mahasiswa dalam tingkat global. Beberapa program Summer
                    School ITB juga akan memberikan tugas dalam aktivitasnya. Bagi mahasiswa yang sukses akan
                    diberikan transkrip penilaian oleh ITB.
                </p>
                <p>
                    Info lebih lanjut mengenai program Summer School di ITB dapat diakses melalui tautan berikut
                    :
                </p>
                <a href="https://wcu.itb.ac.id/2019/12/19/summer-school-program-2020/"><button type="button" class="btn btn-info">https://wcu.itb.ac.id/2019/12/19/summer-school-program-2020/</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-summerschool.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection