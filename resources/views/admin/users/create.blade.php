@extends('admin.master')

@section('title', 'Tạo Người Dùng')

@section('main')
    <div class="row">
        <div class="col-md-12 p-3 card">
            <div class="text-start m-2">

                <a href="{{ route('admin.users.index') }}" class="d-flex align-items-center">
                    <i class='bx bx-chevron-left'></i>
                    <span>Trở về</span>
                </a>
            </div>
            <h3 class="m-3 text-uppercase text-center">Tạo Người Dùng</h3>
            <div class="col-md-12 m-3 d-flex justify-content-center">
                <form method="POST" action="/admin/users" class="col-md-3">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="text" id="name" name="name" placeholder=""
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                        <label for="name">Tên</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" id="email" name="email" placeholder=""
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                        <label for="email">Email</label>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" id="password" name="password" placeholder=""
                            class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" />
                        <label for="password">Mật khẩu</label>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="USER" {{ old('role') == 'USER' ? 'selected' : '' }}>USER</option>
                            <option value="ADMIN" {{ old('role') == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>

                        </select>
                        <label for="role">Quyền</label>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection