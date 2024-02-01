<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index() : View {
        $amounts = Order::pluck('default_amount')->toArray();
        $totalEarnings = calculateEarnings($amounts);

        return view('admin.dashboard.index', compact('totalEarnings'));
    }
}
