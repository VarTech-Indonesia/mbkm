@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>IISMA</h2>

                <p>
                            Indonesian International Student Mobility Awards 2021  
                        </p>
                        <p>
                            Sebagai salah satu bagian dari program Merdeka Belajar-Kampus Merdeka, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi menawarkan program Indonesian International Student Mobility Awards 2021. Program ini memberikan kesempatan kepada mahasiswa ITB yang berminat untuk memeproleh pendidikan pada beberapa universitas yang telah bekerja sama di luar negeri. 
                        </p>
                        <p>
                            Bagi mahasiswa ITB yang tertarik dapat langsung mendaftar langsung melalui portal pendaftaran Indonesian International Student Mobility Awards 2021 
                        </p>
                        <a href="http://kampusmerdeka.kemdikbud.go.id/IISMA"><button type="button"
                                class="btn btn-info">http://kampusmerdeka.kemdikbud.go.id/IISMA 
							</button></a><br><br>
						<a href="https://partnership.itb.ac.id/indonesian-international-student-mobility-awards-2021/"><button type="button"
                                class="btn btn-info">https://partnership.itb.ac.id/indonesian-international-student-mobility-awards-2021/ 
							</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-iisma.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection