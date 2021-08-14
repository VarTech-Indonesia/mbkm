@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">

        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>PKKM SBM ITB</h2>
                <h4>TECHNOPRENEURSHIP TRACK</h4>
                <p>
                   SBM ITB mengundang seluruh mahasiswa Indonesia untuk mengikuti kegiatan Technopreneurship Track SBM ITB. Selama 1 semester (Agustus-Desember 2021), mahasiswa akan dilatih untuk mengasah kemampuan mendirikan dan menjalankan bisnis berbasis teknologi. Para pendaftar akan diseleksi untuk mendapatkan ide dan praktik bisnis terbaik.
                </p>
                <p>
                    Info lebih lanjut mengenai program Desa Binaan di ITB dapat diakses melalui tautan berikut :
                </p>
                <a href="#"><button type="button" class="btn btn-warning">TERBUKA BAGI SELURUH MAHASISWA</button>
                </a>
            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-pkkmsbmitb.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna mt-5">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <h4>Manfaat Kegiatan</h4>
                <p>
                   Seluruh kegiatan tidak dipungut biaya dan akan dilaksanakan secara daring, tetapi tidak menutup kemungkinan dilakukan tatap muka. Selama kegiatan peserta akan mendapatkan:
                    <ol>
                        <li>
                            Dana hibah untuk ide bisnis dan bisnis terpilih yang dapat digunakan untuk pengembangan prototype.
                        </li>
                        <li>
                            Mentor dan coach profesional yang membimbing langsung.
                        </li>
                        <li>
                            Perkuliahan sistem modular ITB dengan porsi 40% perkuliahan di dalam kelas dan 60% perkuliahan di luar kelas.
                        </li>
                        <li>
                            Kesempatan Internship di start-up milik mentor dan coach profesional.
                        </li>
                        <li>
                            Kegiatan Inkubator Bisnis di The Greater Hub.
                        </li>
                        <li>
                            Kegiatan Bootcamp, Demo Day, Pitching Day, Workshop dan Seminar yang tentunya dapat membuka kesempatan pengembangan ide bisnis maupun bisnis yang sudah berjalan. 
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
                <h4>Persyaratan</h4>
                <p>
                    <ol>
                        <li>
                            Mahasiswa S1 aktif seluruh Indonesia (tingkat 3 atau 4).
                        </li>
                        <li>
                            Memiliki ide bisnis/bisnis yang sudah berjalan dibuktikan dengan proposal bisnis berbentuk pitch deck (format disesuaikan kepada peserta). Khusus jalur Business Acceleration Track wajib menyertakan prototype/bukti traction dalam pitch deck tersebut.
                        </li>
                        <li>
                            Menyertakan motivation letter, transkrip nilai semester sebelumnya dan surat rekomendasi dosen wali / dosen yang ditandatangani oleh dosen terkait.
                        </li>
                        <li>
                            Setiap start-up disarankan mendaftar bersama kelompok dan seluruh anggota tim dapat mengambil program berbeda.
                        </li>
                        <li>
                            Aktif menggunakan bahasa Inggris karena perkuliahan sebagian besar akan menggunakan bahasa Inggris.
                        </li>
                    </ol>
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
                <h2>PERHATIAN</h2>
                <h4>Program</h4>
                <p>
                    <ul>
                    <li>
                        Business Initiation Track (Full) (Total 20 SKS)
                    </li>
                    <li>
                        Business Initiation Track (Partial) (Total 9 SKS)
                    </li>  
                    <li>
                       Business Acceleration Track (Full) (Total 20 SKS) 
                    </li> 
                    <li>
                      Business Acceleration Track (Partial) (Total 10 SKS)  
                    </li> 
                    </ul>
                </p>
            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInLeft">
                <h4>Jadwal</h4>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" colspan="2">TANGGAL PENTING</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">12 – 20 Juli 2021</th>
                        <td>Proses Pendaftaran</td>
                        </tr>
                        <tr>
                        <th scope="row">21 – 30 Juli 2021</th>
                        <td>Seleksi Administrasi</td>
                        </tr>
                        <tr>
                        <th scope="row">1 Agustus 2021 </th>
                        <td>Pengumuman Kelulusan</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                        <th scope="col" colspan="2">SELEKSI ADMINISTRASI</th>
                        </tr>
                        <tr>
                        <th scope="row">2 – 6 agustus</th>
                        <td>Proses Interview</td>
                        </tr>
                        <tr>
                        <th scope="row">7 Agustus 2021</th>
                        <td>Pengumuman Kelulusan</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                        <th scope="col" colspan="2">SELEKSI INTERVIEW</th>
                        </tr>
                        <tr>
                        <th scope="row">9 Agustus 2021</th>
                        <td>Proses Pengenalan Program</td>
                        </tr>
                        <tr>
                        <th scope="row">16 Agustus – 10 Desember 2021</th>
                        <td>Pelaksanaan PKKM (Program Kampus Merdeka)</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                        <th scope="col" colspan="2">PENDAFTARAN</th>
                        </tr>
                        <tr>
                        <th scope="row">Melalui tautan</th>
                        <td><a href="https://bit.ly/KMTT_SBM-ITB ">https://bit.ly/KMTT_SBM-ITB </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding bg-danger">
    <div class="container paddding m-auto p-auto">
        <div class="row mx-0 text-center">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <h3>
                    Info lebih lanjut :<br> 
                   Email: <a href="mailto:prog.kmtt@sbm-itb.ac.id">prog.kmtt@sbm-itb.ac.id,</a><br> 
                   Instagram: <a href="http://www.instagram.com/sbmitbofficial"> @sbmitbofficial</a> &  <a href="http://www.instagram.com/@thegreaterhub">@thegreaterhub.</a>
                    </h3>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

@include('partials.06-info')
@endsection