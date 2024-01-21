<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Country;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendCompanyPageController extends Controller
{
    function index() : View {
        $companies = Company::withCount(['jobs' => function($query) {
            $query->where('status', 'active')->where('deadline', '>=', date('Y-m-d'));
        }])->where(['profile_completion' => 1, 'visibility' => 1])->paginate(21);
        
        $countries = Country::all();
        $selectedStates = null;
        $selectedCites = null;

        return view('frontend.pages.company-index', compact('companies', 'countries', 'selectedStates', 'selectedCites'));
    }

    function show(string $slug) : View {
        $company = Company::where(['profile_completion' => 1, 'visibility' => 1, 'slug' => $slug])->firstOrFail();

        return view('frontend.pages.company-details', compact('company'));
    }
}
