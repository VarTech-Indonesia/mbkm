@extends('admin/layout/main')
@section('title','Merdeka Belajar - ITB')
@include('admin/layout/menu-admin-non')
@include('admin/layout/menu-admin-non-left')

@section('menu-admin-non-left')
@yield('menu-admin-left')
@stop

@section('main-content')

@section('menu-admin')
@yield('menu-admin-non')
@stop

@stop