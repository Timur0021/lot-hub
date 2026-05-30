<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Throwable;

class LoginController extends Controller
{
    public function loginPage(): View
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $data = $request->validated();

            $admin = Admin::query()
                ->where('email', $data['email'])
                ->first();

            if (!$admin) {
                return back()->withErrors([
                    'email' => 'Admin not found',
                ]);
            }

            Auth::guard('admin')->login($admin);

            return redirect()->route('admin.dashboard');
        } catch (Throwable $e) {
            return back()->withErrors([
                'email' => 'Сталася помилка при вході',
            ]);
        }
    }
}
