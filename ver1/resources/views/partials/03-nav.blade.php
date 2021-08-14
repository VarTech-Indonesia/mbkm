<!-- navbar     -->
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/mbkm.png" alt="img" class="mobile_logo_width" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">BERANDA MBKM <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">MBKM KEMENDIKBUD<span
                                class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="{{ url('pkkm') }}">PKKM</a>
                            <a class="dropdown-item" href="{{ url('permatasakti') }}">PERMATA SAKTI</a>
                            <a class="dropdown-item" href="{{ url('bangkit') }}">BANGKIT</a>
                            <a class="dropdown-item" href="{{ url('matchingfund') }}">MATCHING FUND</a>
                            <a class="dropdown-item" href="{{ url('iisma') }}">IISMA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">MBKM ITB<span
                                class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_2">
                            <a class="dropdown-item" href="{{ url('kkntematik') }}">KKN TEMATIK</a>
                            <a class="dropdown-item" href="{{ url('summerschool') }}">SUMMER SCHOOL</a>
                            <a class="dropdown-item" href="{{ url('pnpm') }}">PN/PM</a>
                            <a class="dropdown-item" href="{{ url('desabinaan') }}">DESA BINAAN</a>
                            <a class="dropdown-item" href="{{ url('insentif') }}">INSENTIF ITB</a>
                            <a class="dropdown-item" href="{{ url('mitigasibencana') }}">MITIGASI BENCANA</a>
                            <a class="dropdown-item" href="{{ url('citarumharum') }}">CITARUM HARUM</a>
                            <a class="dropdown-item" href="{{ url('programkerjasama') }}">PROGRAM KERJASAMA</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BERITA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">INFO <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- end navbar -->