<!-- info -->
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Info</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($info as $item)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="{{ asset('public/storage/'.$item->image) }}" alt="" class="fh5co_img_special_relative" /></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <div class="fh5co_latest_trading_date_and_name_color">Senin, 14 - Juni - 2021</div>
                        <div class="fh5co_latest_trading_date_and_name_color">{!! $item->excerpt !!}</div>
                        <a href="{{ $item->link_1 }}" class="text-white"> Read More...</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end info -->