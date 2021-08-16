<!-- berita -->
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($berita as $item)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('public/storage/'.$item->image) }}" alt="" /></div>
                    <div>
                        <div class="c_g"><i class="fa fa-clock-o"></i>&nbsp;{{ date("d-m-Y", strtotime($item->created_at)) }}</div>
                        <a href="{{ $item->link_1 }}" class="d-block fh5co_small_post_heading"><span class="">{!! $item->excerpt !!}</span></a>
                        {{-- <a href="{{ url($item->link) }}pkkmsbmitb" class="text-white"> Read More...</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end berita -->