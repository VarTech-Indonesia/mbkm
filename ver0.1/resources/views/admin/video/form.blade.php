@extends('admin/layout/main')
@section('title', $title)
@include('admin/layout/menu-admin-log')
@include('admin/layout/menu-admin-log-left')

@section('menu-admin-log-left')
@yield('menu-admin-left')
@stop

@section('main-content')

@section('menu-admin')
@yield('menu-admin-login')
@stop

<div class="card card-primary">
    
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @if(session('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}" >
        </div>
        <div class="form-group">
        <label>Tanggal dan Jam Berita</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" 
                 name="tanggal_berita" id="tanggal_berita" value="{{ old('tanggal_berita') }}"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Enable" checked>
                    <label class="form-check-label" for="gridRadios1">
                    Enable
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Disabled">
                    <label class="form-check-label" for="gridRadios2">
                    Disabled
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('video.index') }}' " >Kembali</button>
        </div>
        <div class="btn-group btn-group-sm">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
</div>
@stop