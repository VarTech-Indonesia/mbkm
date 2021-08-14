<!-- navbar     -->
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="storage/images/mbkm.png" alt="img" class="mobile_logo_width" /></a>
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
                            @foreach ($menu_kemendikbud as $item)
                                <?php
                                    $url =str_replace(' ', '-', strtolower($item->title));
                                ?>
                                <a class="dropdown-item" href="{{ url('page/'.$item->id.'/'.$url) }}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">MBKM ITB<span
                            class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_2">
                            @foreach ($menu_itb as $item)
                                <?php
                                    $url =str_replace(' ', '-', strtolower($item->title));
                                ?>
                                <a class="dropdown-item" href="{{ url('page/'.$item->id.'/'.$url) }}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">BERITA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/info">INFO <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- end navbar -->