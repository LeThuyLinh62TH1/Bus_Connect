<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra nếu người dùng là admin
        if (auth()->guard('admin')->check()) {
            return $next($request);
        }

        // Nếu không phải admin, chuyển hướng về trang đăng nhập của admin
        return redirect()->route('admin.login');
    }
}
