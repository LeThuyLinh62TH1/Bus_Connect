<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
     public function login(){
        return view('user/pages/Login');
     }
    public function register(){
        return view('user/pages/Register');
    }
    public function postRegister(Request $request){
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
                User::Create($request->all());
                return redirect()->route('login');
            } catch (\Throwable $th) {
                dd($th);
            }
    }
    public function postLogin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->route('index');
        }
        return redirect()->back()->with('error','Tài khoản không tồn tại');
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
