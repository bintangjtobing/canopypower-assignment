<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function loginproses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('memberdbs')
            ->where('username', $username)
            ->first();

        if ($check && HASH::check($password, $check->password)) {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/admin/dashboard');
            // return 'true';
        }
        return back()->with('gagal', 'Authenticate failed!');
        // dd($request->all());
    }
}
