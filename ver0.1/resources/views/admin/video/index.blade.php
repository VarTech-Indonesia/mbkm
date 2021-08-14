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

@if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <table class="table table-head-fixed text-nowrap">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Link</th>
                <th>Tanggal Berita</th>
                <th>Status</th>
                <th style="width: 40px">
                <div class="btn-group btn-group-sm align-center">
                    <a href="{{ route('video.create') }}" class="btn btn-success">Add</a>
                </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->link}}</td>
                <td>{{$item->tanggal_berita}}</td>
                <td>{{$item->status}}</td>
                <td>
                <div class="btn-group btn-group-sm">
                <a href="{{ route('video.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                </div>
                </td>
            </tr>
            @empty
                <div class="alert alert-warning">
                Data Belum Tersedia
                </div>
            @endforelse
        </tbody>
    </table>
</div>
@stop