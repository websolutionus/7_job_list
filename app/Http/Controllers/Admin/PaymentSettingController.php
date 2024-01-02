<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentSettingController extends Controller
{
    function index() : View {

        return view('admin.payment-setting.index');
    }

    function updatePaypalSetting(Request $request) : RedirectResponse {
        dd($request->all());
        return redirect()->back();
    }
}
