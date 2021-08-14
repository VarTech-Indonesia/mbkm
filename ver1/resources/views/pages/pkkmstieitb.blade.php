@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">

        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>PKKM STEI ITB</h2>
                <h4>DIGITAL INNOVATION & ENTREPRENEURSHIP</h4>
                <h5><i>Penguatan Ekosistem Industri Software dan Pemanfaatannya bagi Masyarakat</i></h5>
                <p>
                   Sekolah Teknik Elektro dan Informatika ITB membuka kesempatan kepada seluruh mahasiswa di Indonesia untuk mengikuti program Program Merdeka Belajar Kampus Merdeka - Digital Innovation & Entrepreneurship.  Program ini akan memberikan pengalaman kepada mahasiswa untuk mengetahui seluk beluk dunia industri digital dan bagaimana memanfaatkan potensi dalam dunia digital dalam berbagai bidang seperti ekonomi, pertanian, kebudayaan, hiburan, pariwisata, dan sektor keuangan. Dalam kegiatan ini mahasiswa tidak hanya akan memperoleh pembelajaran di dalam kelas, tetapi juga mengaplikasikan berbagai ide dan kreativitas langsung di dunia industri. Mahasiswa juga akan dibina untuk membangun berbagai usaha rintisan (start-up) untuk dikembangkan menjadi prospek bisnis. Selain itu, mahasiswa juga dapat membuat berbagai rekayasa perangkat lunak (software) untuk menjawab berbagai tantangan di masyarakat.
                </p>
            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-pkkmstieitb.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna mt-5">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <h4>Tujuan</h4>
                <p>
                   Kelas kolaborasi ini bertujuan untuk:
                    <ol>
                        <li>
                            Meningkatkan kemampuan lulusan dalam bekerja/berkolaborasi dalam lingkungan multidisiplin dan memecahkan masalah riil di masyarakat luas, dunia industri, maupun keilmuan.
                        </li>
                        <li>
                            Membangun usaha rintisan di bidang informatika/teknologi informasi sehingga menjadi motor pertumbuhan industri di Indonesia.
                        </li>
                        <li>
                            Membangun kolaborasi multidisiplin sehingga dapat memberikan solusi terhadap problem nyata melalui sebuah layanan/produk software
                        </li>
                    </ol>
                </p>
            </div>
            {{-- <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/bg-pkkmsbmitb-2.png') }}" alt="" class="img-fluid">
            </div> --}}
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna mt-5">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
                <h4>Jenis Kegiatan</h4>
                <p>Program ini terdiri atas berbagai kegiatan di antaranya:
                    <ul>
                        <li>
                            Initiation yang terdiri atas industry & partner workshop, ideation & competition, hackathon, business idea & prototype development
                        </li>
                        <li>
                            Product development yang terdiri atas bootcamp, startup technology stack
                        </li>
                        <li>
                            Business development yang terdiri atas business initiation & acceleration, product showcase & investor meetup

                        </li>
                    </ul>
                </p>
            </div>
            {{-- <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInLeft">
                <img src="{{ asset('images/bg-pkkmsbmitb-3.png') }}" alt="" class="img-fluid">
            </div> --}}
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna mt-5">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <h4>Persyaratan</h4>
                <p>
                   Kegiatan ini terbuka bagi seluruh mahasiswa Indonesia (tingkat 3 dan 4) dan dapat diikuti secara perorangan maupun berkelompok (maks. 5 orang). Syarat pendaftaran:
                    <ol>
                    <li>
                        Transkrip semester sebelumnya
                    </li>
                    <li>
                        CV
                    </li>  
                    <li>
                       Surat rekomendasi dosen wali/pembimbing akademis
                    </li> 
                    <li>
                      Motivation letter maksimal 500 kata
                    </li>
                    <li>
                    Mampu berbahasa Inggris secara aktif
                    </li>
                    <li>
                    Ide/proposal bisnis (opsional)
                    </li> 
                    </ol>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding bg-danger">
    <div class="container paddding m-auto p-auto">
        <div class="row mx-0 text-center">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <h3>
                    Pendaftaran dilakukan melalui<br> 
                   <a href="https://bit.ly/diginove2021">https://bit.ly/diginove2021</a>
                    </h3>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

@include('partials.06-info')
@endsection