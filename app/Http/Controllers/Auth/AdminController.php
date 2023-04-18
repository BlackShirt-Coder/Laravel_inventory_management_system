<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function Profile()
    {
        $user_id = Auth::user()->id;
        $user_data = User::find($user_id);
        return view('admin.admin_profile_view',compact('user_data'));
    }
    public function ProfileEdit()
    {
        $user_id = Auth::user()->id;
        $user_data = User::find($user_id);
        return view('admin.admin_profile_edit',compact('user_data'));
    }
}
