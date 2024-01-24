<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Hero;
use App\Models\JobCategory;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    // return home view
    function index() : View {
        $hero = Hero::first();
        $countries = Country::all();
        $jobCategories = JobCategory::all();
        $plans = Plan::where(['frontend_show' => 1, 'show_at_home' => 1])->get();
        return view('frontend.home.index', compact('plans', 'hero', 'jobCategories', 'countries'));
    }
}
