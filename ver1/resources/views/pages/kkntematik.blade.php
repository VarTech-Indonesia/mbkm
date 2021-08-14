@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>KKN Tematik</h2>

                <p>
                            Program Kuliah Kerja Nyata (KKN) Tematik ITB merupakan salah satu program MBKM yang
                            diselenggarakan oleh ITB dalam upaya menjawab tantangan di masyarakat secara nyata. Dalam
                            program ini, mahasiswa diajak untuk berkegiatan, berinteraksi, dan belajar langsung di
                            tengah masyarakat. Tema KKN Tematik ITB meliputi air, infrastruktur, energi, pertanian, dan
                            pendidikan. Program ini merupakan mata kuliah pilihan yang dapat diikuti oleh seluruh
                            mahasiswa ITB.
                        </p>
                        <p>
                            Info lebih lanjut mengenai program KKN TEMATIK di ITB dapat diakses melalui tautan berikut :
                        </p>
                        <a href="https://kemahasiswaan.itb.ac.id/kkn"> <button type="button"
                                class="btn btn-info">https://kemahasiswaan.itb.ac.id/kkn</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-kknitb.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection