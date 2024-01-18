<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendJobPageController extends Controller
{
    function index() : View {
        $jobs = Job::where(['status' => 'active'])
            ->where('deadline', '>=', date('Y-m-d'))->paginate(10);
        $countries = Country::all();
        $jobCategories = JobCategory::all();
        $jobTypes = JobType::all();
        return view('frontend.pages.jobs-index', compact('jobs', 'countries', 'jobCategories', 'jobTypes'));
    }

    function show(string $slug) : View {
        $job = Job::where('slug', $slug)->firstOrFail();
        $openJobs = Job::where('company_id', $job->company->id)->where('status', 'active')->where('deadline', '>=', date('Y-m-d'))->count();
        return view('frontend.pages.job-show', compact('job', 'openJobs'));
    }
}
