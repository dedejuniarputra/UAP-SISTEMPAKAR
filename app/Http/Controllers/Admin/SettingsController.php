<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function profile()
    {
        return view('admin.settings.profile');
    }

    public function profileUpdate(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();

            if (Storage::disk('public')->exists('users/' . $user->image)) {
                if ($user->image !== 'default.jpg') {
                    Storage::disk('public')->delete('users/' . $user->image);
                }
            }

            $request->image->storeAs('users', $filename, 'public');
        } else {
            $filename = Auth::user()->image;
        }

        User::where('id', Auth::user()->id)->update([
            'username' => Str::slug($request->username),
            'name' => $request->name,
            'image' => $filename
        ]);

        return redirect('admin/profile')->with('toast_success', 'Profile Berhasil Diubah');
    }

    public function password()
    {
        return view('admin.settings.password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'password_confirmation' => ['required', 'same:new_password'],
        ]);

        User::find(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/admin/password')->with('toast_success', 'Password Berhasil Diubah');
    }
}
