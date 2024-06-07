<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HanoiBus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/user/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/style.min.css')}}">


</head>

<body class="">
<div class="my-account-page-warpper section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 m-auto">
                        <div class="myaccount-box-wrapper">
                            <div class="helendo-tabs">
                                <ul class="nav" role="tablist">
                                    <li class="tab__item nav-item active">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab">Đăng Nhập Trang Quản Trị</a>
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
                                            <button type="submit" class="btn btn--full btn--black">Tạo tài khoản</button>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    <script src="{{ asset('assets/user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
</body>
</html>

