@extends('admin.layouts.master')

@section('title')
    Thêm Mới Người Dùng - NewsX
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span class="ml-1">Element</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Người Dùng</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm Mới Người Dùng</a></li>
                    </ol>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Thêm Mới Người Dùng</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin.users.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default @error ('name') is-invalid @enderror"
                                                    placeholder="Họ và Tên" name="name"  value="{{ old('name') }}">
                                                    @error('name')
                                                    <p>{{$message}}</p>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control input-default @error ('password') is-invalid @enderror"
                                                    placeholder="Mật Khẩu" name="password" value="{{ old('name') }}">
                                                    @error('password')
                                                    <p>{{$message}}</p>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control input-default @error ('password_confirmation') is-invalid @enderror"
                                                    placeholder="Nhập Lại Mật Khẩu" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                                    @error('password_confirmation')
                                                    <p>{{$message}}</p>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default @error ('email') is-invalid @enderror" placeholder="Email"
                                                    name="email"  value="{{ old('email') }}">
                                                    @error('email')
                                                    <p>{{$message}}</p>
                                                    @enderror
                                            </div>

                                            <div class="form-group ">
                                                <select class="form-control @error ('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}">
                                                    <option selected disabled>Chọn Vai Trò</option>
                                                    @foreach ($roles as $role)
                                                        {{-- <option value="{{ $role->id }}">{{ $role->name }}</option> --}}

                                                        <option value="{{ $role->id }}"
                                                            {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                                            {{ $role->name }}
                                                        </option>
                                                    @endforeach
                                                 
                                                </select>
                                                @error('role_id')
                                                <p>{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Tải
                                                        Lên</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input  @error ('image') is-invalid @enderror" name="image"
                                                        accept="image/*" value="{{ old('image') }}">
                                                    <label class="custom-file-label">Chọn Ảnh</label>
                                                  
                                                </div>
                                               
                                            </div>
                                            @error('image')
                                                <p>{{$message}}</p>
                                                @enderror
                                        </div>
                                   
                                    </div>

                                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                                        Quay Lại</a>
                                    <button type="submit" class="btn btn-success">Thêm Mới</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
