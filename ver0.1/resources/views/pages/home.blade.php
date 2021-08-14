@extends('layouts.master')

@section('content')

@include('partials.04-slider')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 sec-01">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h2>{{$data->title}}</h2>
                {!! $data->body !!}
            </div>
            {{-- <div class="col-md-6 animate-box m-auto" data-animate-effect="fadeInRight">
                <img src="{{ asset('storage/'.$data->image) }}" alt="" class="img-fluid">
            </div> --}}
        </div>
    </div>
</div>
<!-- end content -->
@include('partials.06-info')
@include('partials.07-berita')
@include('partials.08-video')

@endsection