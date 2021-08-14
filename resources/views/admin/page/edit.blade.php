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
<form action="{{ route('page.update', $item->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Main Posting</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Menu Parent</label>
            <select  class="form-control" name="id_menu_parent" id="id_menu_parent" style="cursor: pointer" required>
                @foreach ($menuParents as $menuParents)
                <option value="{{ $menuParents->id }}" {{ $menuParents->id == $item->id_menu_parent ? 'selected' : '' }}>{{$menuParents->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Menu Tengah</label>
            <select  class="form-control" name="id_menu_one_child" id="id_menu_one_child" style="cursor: pointer">
                <option value=""></option>
                @foreach ($menuOneChild as $menuOneChild)
                <option value="{{ $menuOneChild->id }}" {{ $menuOneChild->id == $item->id_menu_one_child ? 'selected' : '' }}>{{$menuOneChild->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Menu Bawah</label>
            <select  class="form-control" name="id_menu_two_child" id="id_menu_two_child" style="cursor: pointer">
                <option value=""></option>
                @foreach ($menuTwoChild as $menuTwoChild)
                <option value="{{ $menuTwoChild->id }}" {{ $menuTwoChild->id == $item->id_menu_two_child ? 'selected' : '' }}>{{$menuTwoChild->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Singkat</label>
            <textarea id="excerpt" name="excerpt" required>{{ old('excerpt', $item->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Detail</label>
            <textarea id="body" name="body" required>{{ old('body', $item->body) }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Link 1</label>
            <input type="text" class="form-control" id="link_1" name="link_1" value="{{ old('link_1', $item->link_1) }}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Link 2</label>
            <input type="text" class="form-control" id="link_2" name="link_2" value="{{ old('link_2', $item->link_2) }}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gambar</label>
            <input type="file" id="image" name="image">
            <input type="hidden" value="{{$item->image}}" id="image_hidden" name="image_hidden">
            <img src="{{asset('public/storage/'.$item->image)}}"  width="400px"/>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Published" {{ $item->status == 'Published' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios1">
                    Published
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Unpublish" {{ $item->status == 'Unpublish' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios2">
                    Unpublish
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">SEO</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Keywords</label>
            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $item->meta_keywords) }}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Description</label>
            <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{ old('meta_description', $item->meta_description) }}" >
        </div>
        <div class="card-footer">
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('page.index') }}' " >Kembali</button>
            </div>
            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
</form>
@stop