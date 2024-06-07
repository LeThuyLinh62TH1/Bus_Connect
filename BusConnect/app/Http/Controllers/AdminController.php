<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin/pages/account/Login');
    }

    public function post_Login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|min:9|max:255',
            'password' => 'required|string|min:8',
        ];
        $message = [
           'email.min' => 'Email phải lớn hơn 8 ký tự',
           'email.max' => 'Email phải nhỏ hơn 55 ký tự',  
           'password.required' => 'Vui lòng nhập mật khẩu',  
           'password.min' => 'Mật khẩu tối thiểu chứa 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()){
           return redirect()->back()
           ->withErrors($validator)
           ->withInput();
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.dashboard');
            }
            return redirect()->back()->with('error','Tài khoản không tồn tại');
            //dd($request->all());
    }
    

    public function dashboard()
    {
        return view('admin/layouts/HomePage');
    }
    public function createAccount()
    {
        return view('admin/pages/account/Create_admin');
    }
    public function post_createAccount(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:55',
            'email' => 'required|string|email|min:9|max:255',
            'password' => 'required|string|min:8|confirmed',
        ];
        $message = [
           'name.required' => 'Vui lòng nhập tên tài khoản của bạn',
           'name.min' => 'Tên người dùng phải lớn hơn 3 ký tự',
           'name.max' => 'Tên người dùng phải nhỏ hơn 55 ký tự',
           'email.required' => 'Vui lòng nhập Email',
           'email.min' => 'Email phải lớn hơn 8 ký tự',
           'email.max' => 'Email phải nhỏ hơn 55 ký tự',  
           'password.required' => 'Vui lòng nhập mật khẩu',  
           'password.min' => 'Mật khẩu tối thiểu chứa 8 ký tự',
           'password.confirmed' =>  'Mật khẩu không đúng',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()){
           return redirect()->back()
           ->withErrors($validator)
           ->withInput();
        }
       $request->merge(['password'=>Hash::make($request->password)]);
       try {
        // // Tạo tài khoản admin mới
        // $admin = new Admin();
        // $admin->name = $request->name;
        // $admin->email = $request->email;
        // $admin->password = Hash::make($request->password);
        // $admin->save();
        Admin::create($request->all());
        // return redirect()->route('admin.dashboard');
    } catch (\Throwable $th) {
        // Xử lý ngoại lệ nếu có
        dd($th);
    }
    return redirect()->back()->with('success');
    }
}
