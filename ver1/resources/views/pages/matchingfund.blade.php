@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

                <h2>Matchingfund</h2>
                <p>
                            Program Matching Fund merupakan salah satu program MBKM yang memiliki tujuan untuk
                            meningkatkan kolaborasi antara perguruan tinggi dan industri. Melalui program ini,
                            riset-riset yang selama ini dikembangkan oleh perguruan tinggi dapat secara cepat
                            dimanfaatkan oleh industri. Selain itu, program ini juga dapat memberikan gambaran kepada
                            perguruan tinggi riset seperti apa saja yang saat ini sedang dibutuhkan oleh dunia industri.
                        </p>
                        <p>
                            Melalui platform kedaireka.id, para periset di perguruan tinggi dapat mengajukan dan
                            mengolaborasikan hasil risetnya kepada dunia industri secara efisien dan efektif. Saat ini
                            Kemendikbud menyediakan dana total Rp250 miliar sebagai dana program Matching Fund.
                        </p>
                        <p>
                            Para pengusul kegiatan dapat mengajukan program matching fund melalui tautan berikut atau
                            melalui kedaireka.id
                        </p>
                        <a href="https://kedaireka.id"><button type="button"
                                class="btn btn-info">https://kedaireka.id</button></a>

            </div>
            <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('images/brand-matchingfund.png') }}" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection