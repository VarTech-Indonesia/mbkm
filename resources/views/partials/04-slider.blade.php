<!-- slider -->
<div class="container-fluid">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                    $active ="active";
                ?>
                @foreach ($slider as $item)
                <div class="carousel-item {{ $active }}">
                    @if ( ($item->link != NULL) OR ($item->link != "") )
                        <img class="d-block w-100" style="cursor: pointer;" onclick="window.location.href='{{$item->link}}'" src="{{ asset('public/storage/'.$item->image) }}" alt="{{$item->title}}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><button type="button" class="btn btn-warning btn-sm" onclick="window.location.href='{{$item->link}}'">Info Lebih Lanjut</button></h5>
                        </div>
                    @else
                        <img class="d-block w-100" src="{{ asset('public/storage/'.$item->image) }}" alt="{{$item->title}}">
                    @endif
                <?php
                    $active ="";
                ?>  
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end slider -->