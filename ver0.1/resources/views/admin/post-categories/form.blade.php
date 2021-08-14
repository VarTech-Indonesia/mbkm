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
    <form action="{{ route('post-categories.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}" required >
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('post-categories.index') }}' " >Kembali</button>
        </div>
        <div class="btn-group btn-group-sm">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
</div>
@stop