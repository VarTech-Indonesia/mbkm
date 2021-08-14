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
    <form action="{{ route('menu-one-child.update',$item->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Menu Parent</label>
            <select id="id_menu_parent" class="form-control" name="id_menu_parent" style="cursor: pointer" required>
                @foreach ($MenuParentAdmin as $MenuParentAdmin)
                <option value="{{ $MenuParentAdmin->id }}" {{ $MenuParentAdmin->id == $item->id_menu_parent ? 'selected' : '' }}>{{$MenuParentAdmin->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Menu Tengah</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Link Menu Tengah</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $item->link) }}" >
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Enable" {{ $item->status == 'Enable' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios1">
                    Enable
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Disabled" {{ $item->status == 'Disabled' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios2">
                    Disabled
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('menu-one-child.index') }}' " >Kembali</button>
        </div>
        <div class="btn-group btn-group-sm">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
</div>
@stop