@extends('admin.layouts.master')

@section('title')
    Thêm Mới Danh Mục
@endsection

@section('content')
<h1>{{ $category->name }}</h1>
<p>Slug: {{ $category->slug }}</p>
<p>Status: {{ $category->status == 1 ? 'Còn hàng' : 'Hết hàng' }}</p>
<p>Hiển thị tại trang chủ: {{ $category->show_at_home == 1 ? 'Có' : 'Không' }}</p>
@endsection
