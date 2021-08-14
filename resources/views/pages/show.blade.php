@extends('layouts.master')

@section('content')
<!-- content -->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0 contentna">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>{{$data->title}}</h2>
                {!! $data->body !!}
                <?php
                if ( ($data->link_1 !=NULL) OR ($data->link_1 !="") ) {
                ?> 
                    <a href="{{$data->link_1}}" target="_blank"><button type="button" class="btn btn-info" >{{$data->link_1}}</button></a>
                <?php
                }
                if ( ($data->link_2 !=NULL) OR ($data->link_2 !="") ) {
                ?>
                    <br /><br />
                    <a href="{{$data->link_2}}" target="_blank"><button type="button" class="btn btn-info" >{{$data->link_2}}</button></a>
                <?php
                }
                ?>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <img src="{{ asset('public/storage/'.$data->image) }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- end content -->

@include('partials.06-info')
@endsection