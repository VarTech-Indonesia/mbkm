<!-- video news -->
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                @foreach ($video as $item)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="{{ "video_".$item->id}}" width="100%" height="200" src="{{ $item->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="pt-2">
                            <!-- <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Penyambutan Mahasiswa Baru/Temu Awal Institut Teknologi Bandung TA 2020/2021 </span></a> -->
                            <div class="c_g"><i class="fa fa-clock-o"></i>&nbsp;{{ date("d-m-Y", strtotime($item->tanggal_berita)) }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end video news -->