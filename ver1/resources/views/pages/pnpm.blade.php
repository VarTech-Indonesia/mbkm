@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Pengabdian Masyarakat</h2>

                <p>Program Pengabdian Masyarakat (PM) merupakan salah satu program MBKM ITB yang berupaya
                    menjawab kebutuhan masyarakat dengan menerapkan hasil kepakaran sivitas akademik ITB. Hingga
                    saat ini terdapat lima wilayah yang menjadi fokus utama pelaksanaan pengabdian masyarakat
                    ITB, yaitu Bandung Raya, Jawa Barat, Jawa, Luar Jawa, dan daerah Perbatasan/3T.</p>
                <p>
                    Program ini dapat diikuti oleh seluruh mahasiswa ITB dengan empat prioritas tema kegiatan,
                    yaitu pemberdayaan wilayah/desa binaan, pemulihan/reaktivasi ekonomi dalam kerangka akb,
                    mitigasi, adaptasi dan penanggulangan bencana, dan industri kreatif dan pariwisata. Hingga
                    saat ini, sebaran wilayah program masyarakat ITB terbentang mulai Pulau Sumatera hingga
                    Pulau Papua.</p>
                <p>
                    Info lebih lanjut mengenai program Pengabdian Masyarakat di ITB dapat diakses melalui tautan
                    berikut :
                </p>
                <a href="https://www.lppm.itb.ac.id/category/buletin-ppm/"><button type="button" class="btn btn-info">https://www.lppm.itb.ac.id/category/buletin-ppm/</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-pnpm.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection