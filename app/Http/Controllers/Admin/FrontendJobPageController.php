<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendJobPageController extends Controller
{
    function index() : View {
        $jobs = Job::where(['status' => 'active'])
            ->where('deadline', '>=', date('Y-m-d'))->paginate(10);
        return view('frontend.pages.jobs-index', compact('jobs'));
    }
}
