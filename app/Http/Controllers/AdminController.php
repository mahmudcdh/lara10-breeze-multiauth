<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function adminProfilePage(Request $request)
    {
        return view('admin.profile.profile-page', ['user' => $request->user()]);
    }

    public function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'password' => ['required', 'string', 'min:8'],
                // 'password_confirmation' => ['required', 'string', 'min:8'],
            ]);

            $user = $request->user();
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Password updated successfully..!',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
