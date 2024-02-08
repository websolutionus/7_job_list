<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileUpdateController extends Controller
{
    function index() : View {
        $admin = auth()->guard('admin')->user();
        return view('admin.profile.index', compact('admin'));
    }

    function update(Request $request) : RedirectResponse {
        $request->validate([
            'name' => ['required', 'max:255'],
            'image' => ['nullable', 'max:2000', 'image'],
            'email' => ['required', 'email', 'max:255']
        ]);

        
    }
}
