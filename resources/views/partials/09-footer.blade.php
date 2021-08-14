<!-- start footer -->
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{ asset('public/storage/images/100th-ITB.png') }}" alt="img" class="footer_logo" />
            </div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-3 col-lg-4">
                <div class="footer_main_title py-3">MBKM</div>
                <div class="footer_sub_about pb-3"> “Tujuan dari MBKM yakni memberikan tantangan sekaligus kesempatan bagi mahassiwa, sebagai bentuk kreativitas, peningkatan kapasitas kemampuan, hingga membentuk kepribadian. Program ini pun diyakini mampu mengembangkan softskill dan passion mahasiswa, guna menjadi pribadi yang mandiri dan adaptif dalam memecahkan persoalan yang kompleks”.
                    <br><i>Direktur Direktorat Kemahasiswaan (Ditmawa) ITB,<br>Dr. G. Prasetyo Adhitama S.Sn, M.Sn</i>
                </div>
                <div class="footer_mediya_icon">
                    {{-- <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a></div> --}}
                    <div class="text-center d-inline-block"><a href="https://www.instagram.com/merdekabelajar.itb/" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="https://twitter.com/itbofficial" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="https://www.facebook.com/institutteknologibandung" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a></div>
                        <div class="text-center d-inline-block"><a href="https://www.youtube.com/channel/UCYtVgmeqWjRfESeQ1IhI2oA" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-youtube"></i></div>
                        </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Program MBKM KEMENDIKBUD</div>
                <ul class="footer_menu">
                    @foreach ($menu_kemendikbud as $item)
                    <?php
                        $url =str_replace(' ', '-', strtolower($item->title));
                    ?>
                    <li><a href="{{ url('page/'.$item->id.'/'.$url) }}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; {{$item->title}}</a></li>
                     @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Program MBKM ITB</div>
                <ul class="footer_menu">
                    @foreach ($menu_itb as $item)
                    <?php
                        $url =str_replace(' ', '-', strtolower($item->title));
                    ?>
                    <li><a href="{{ url('page/'.$item->id.'/'.$url) }}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; {{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Info Terbaru</div>
                @foreach ($info as $item)
                <a href="{{ $item->link }}" class="footer_img_post_6"><img src="{{ asset('public/storage/'.$item->image) }}" alt="{{ $item->excerpt  }}" /></a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-1 py-4 Reserved"> <img src="{{ asset('public/storage/images/itb-white.png') }}" alt="ITB"> <a
                    href="https://merdekabelajar.itb.ac.id" title="merdeka belajar"></a></div>
            <div class="col-12 col-md-6 py-4 spdp_left"> Kantor Wakil Rektor bidang Akademik dan Kemahasiswaan <br> Institut Teknologi Bandung<br> © Copyright 2021 <a
                        href="https://merdekabelajar.itb.ac.id" title="merdeka belajar">MBKM ITB</a></div>       
            <div class="col-12 col-md-5 spdp_right py-4">
                <a href="{{ url('/') }}" class="footer_last_part_menu">Home</a>
                <a href="/info" class="footer_last_part_menu">Info</a>
                <a href="/berita" class="footer_last_part_menu">Berita</a>
                <a href="/video" class="footer_last_part_menu">Video News</a></div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<!-- end footer -->