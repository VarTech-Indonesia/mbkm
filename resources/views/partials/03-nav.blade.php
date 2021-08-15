
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 
</style>
<section>
<div class="bg-faded fh5co_padd_mediya padding_786"">
    <div class="container padding_786">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MBKM KEMENDIKBUD</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($menu_kemendikbud as $item)
                            <?php
                                $url =str_replace(' ', '-', strtolower($item->title));
                            ?>
                            <li class="dropdown-submenu"><a class="dropdown-item" href="{{ url('page/'.$item->id.'/'.$url) }}">{{$item->title}}</a>
                                <ul>
                                @foreach ($menu_sub_kemendikbud as $item_sub)
                                <?php
                                    $url_item_sub =str_replace(' ', '-', strtolower($item_sub->title));
                                ?>
                                    @if($item->id==$item_sub->id_menu_one_child)
                                        <li><a class="dropdown-item" href="{{ url('page/'.$item_sub->id.'/'.$url_item_sub) }}">{{$item_sub->title}}</a></li>
                                    @endif
                                @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MBKM ITB</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($menu_itb as $item)
                            <?php
                                $url =str_replace(' ', '-', strtolower($item->title));
                            ?>
                            <li class="dropdown-submenu"><a class="dropdown-item" href="{{ url('page/'.$item->id.'/'.$url) }}">{{$item->title}}</a> </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/info') }}">Info</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
</script>
<!-- navbar     -->
{{-- <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="public/storage/images/mbkm.png" alt="img" class="mobile_logo_width" /></a>
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
                        <a class="nav-link" href="{{ url('/berita') }}">BERITA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/info') }}">INFO <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div> --}}
<!-- end navbar -->