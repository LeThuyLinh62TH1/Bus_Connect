@extends('user/layouts/HomePage')
@section('content')
{{-- <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-start">
                        <h2 class="breadcrumb-title">Đăng Nhập</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-6">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-sm-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Đăng Nhập</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- breadcrumb-area end -->
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab">Đăng Nhập</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content content-modal-box">
                                <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                    <form action="{{route('postLogin')}}" class="account-form-box" method="POST">
                                        @csrf
                                        @if ($message = Session::get('error'))
                                            <div class="alert alert-danger alert-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="single-input">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name ="email" id="user_email" placeholder="Địa chỉ Email" value="{{old('email')}}">
                                            @error('email')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="single-input">
                                            <label for="">Mật khẩu</label>
                                            <input type="password" class="form-control" name ="password"id="user_password" placeholder="Mật khẩu">
                                            @error('password')
                                              <span style="color: red;">{{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div class="checkbox-wrap mt-10">
                                            <label class="label-for-checkbox inline mt-15">
                                                <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                            </label>
                                            <a href="#" class=" mt-10">Lost your password?</a>
                                        </div>
                                        <div class="button-box mt-25">
                                            <button type="submit" class="btn btn-dark btn-md w-100 mb-3">Đăng Nhập</button>
                                        </div>
                                        <div class="button-box">
                                            <a href="{{route('register')}}" class="btn btn-primary btn-md w-100">Đăng Ký</a>
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