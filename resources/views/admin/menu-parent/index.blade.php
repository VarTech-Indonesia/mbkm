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

<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Menu</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th style="width: 40px">
                        <div class="btn-group btn-group-sm align-center">
                            <a href="{{ route('menu-parent.create') }}" class="btn btn-success">Add</a>
                        </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->link}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                        <div class="btn-group btn-group-sm">
                        <a href="{{ route('menu-parent.edit',$item->id) }}" class="btn btn-warning">Edit</a>
                        </div>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-warning">
                        Data Belum Tersedia
                        </div>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Menu</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th style="width: 40px">
                        <div class="btn-group btn-group-sm align-center">
                            <a href="{{ route('menu-parent.create') }}" class="btn btn-success">Add</a>
                        </div>
                        </th>
                    </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
        </div>
        </div>
    </div>
</section>
@stop