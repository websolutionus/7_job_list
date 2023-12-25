<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CandidateBasicProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CandidateProfileController extends Controller
{
    function index() : View {
        return view('frontend.candidate-dashboard.profile.index');
    }

    /** update basic info of candidate profile */
    function basicInfoUpdate(CandidateBasicProfileUpdateRequest $request) : RedirectResponse {

        return redirect()->back();
    }
}
