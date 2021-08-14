@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Insentif ITB</h2>

                <p>
                    Dalam meningkatkan jumlah rancangan and pelaksanaan kegiatan MBKM yang tentunya dalam bentuk
                    kegiatan akademik berbasis Kolaboratif, Outcomes based, Mahasiswa aktif belajar dan Project
                    Based yang bertujuan untuk menyelesaikan masalah masyarakat.
                </p>
                <p>
                    ITB memberikan insentif 2,3 M terurutama untuk Program MBKM yang tidak didanai oleh Mitra
                    atau Kementerian Pendidikan dan Kebudayaan.
                </p>
                <p>
                    Selengkapnya mengenai Program Insentif Merdeka Belajar Kampus Merdeka dapat diakses melalui;
                </p>
                <a href="https://s.id/InsentifMBKM/"> <button type="button" class="btn btn-info">https://s.id/InsentifMBKM</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-insentif.png') }}" alt="" class="img-fluid">
                <div class="col pt-3">
                            <h5>PROGRAM INSENTIF ITB 2021</h5>
                            <h6>DATELINE APRIL 2021</h6>
                </div>
                        <div class="row text-left rowbtnborder m-0">
                            <div class="col=4 m-0"><button type="button" class="btn btn-warning btnsize">UNDUH</button>
                            </div>
                            <div class="col-8 m-0">
                                <h5>KETENTUAN</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-left rowbtnborder m-0">
                            <div class="col=4 m-0"><button type="button" class="btn btn-danger btnsize">UNGGAH</button>
                            </div>
                            <div class="col-6 m-0">
                                <h5>PROPOSAL</h5>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection