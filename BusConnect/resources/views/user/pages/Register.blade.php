@extends('user/layouts/HomePage')
@section('content')
{{-- <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-start">
                        <h2 class="breadcrumb-title">Đăng Ký</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-6">
                        <ul class="breadcrumb-list text-center text-sm-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Đăng Ký</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="main-wrapper">
    <div class="site-wrapper-reveal border-bottom">

        <div class="my-account-page-warpper section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 m-auto">
                        <div class="myaccount-box-wrapper">
                            <div class="helendo-tabs">
                                <ul class="nav" role="tablist">
                                    <li class="tab__item nav-item active">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab">Đăng Ký</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content content-modal-box">
                                <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                    <form action="" class="account-form-box" method="POST">
                                        @csrf
                                        @if (session('error'))
                                            <div class="alert alert-danger text-center">
                                                {{session('error')}}
                                            </div>
                                        @endif
                                        <div class="single-input">
                                            <label for="">Tên người dùng</label>
                                            <input type="text" class="form-control" name ="name" id="user_name" placeholder="Tên người dùng" value="{{old('name')}}">
                                            @error('name')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="single-input">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name ="email" id="user_email" placeholder="Địa chỉ Email" value="{{old('email')}}">
                                            @error('email')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="single-input">
                                            <label for="">Mật khẩu</label>
                                            <input type="password" class="form-control" name ="password" id="user_password" placeholder="Mật khẩu">
                                            @error('password')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="single-input">
                                            <label for="">Xác nhận mật khẩu</label>
                                            <input type="password" class="form-control" name ="password_confirmation" id="user_password" placeholder="Nhập lại mật khẩu">
                                            @error('password')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="button-box mt-25">
                                            <button type="submit" class="btn btn--full btn--black">Đăng Ký</button>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection