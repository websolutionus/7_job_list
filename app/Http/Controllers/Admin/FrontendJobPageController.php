<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendJobPageController extends Controller
{
    function index(Request $request) : View {

        $countries = Country::all();
        $jobCategories = JobCategory::withCount(['jobs' => function($query) {
            $query->where('status', 'active')->where('deadline', '>=', date('Y-m-d'));
        }])->get();
        $jobTypes = JobType::all();
        $selectedStates = null;
        $selectedCites = null;


        $query = Job::query();
        $query->where(['status' => 'active'])
        ->where('deadline', '>=', date('Y-m-d'));

        if($request->has('search') && $request->filled('search')) {
            $query->where('title', 'like', '%'. $request->search . '%');
        }
        if($request->has('country') && $request->filled('country')) {
            $query->where('country_id', $request->country);
        }
        if($request->has('state') && $request->filled('state')) {
            $query->where('state_id', $request->state);
            $selectedStates = State::where('country_id', $request->country)->get();
            $selectedCites = City::where('state_id', $request->state)->get();

        }
        if($request->has('city') && $request->filled('city')) {
            $query->where('city_id', $request->city);
        }

        if($request->has('category') && $request->filled('category')) {
            $categoryIds = JobCategory::whereIn('slug', $request->category)->pluck('id')->toArray();
            $query->whereIn('job_category_id', $categoryIds);
        }
        if($request->has('min_salary') && $request->filled('min_salary') && $request->min_salary > 0) {
            $query->where('min_salary', '>=', $request->min_salary)->orWhere('max_salary', '>=', $request->min_salary);
        }
        if($request->has('jobtype') && $request->filled('jobtype')) {
            $typeIds = JobType::whereIn('slug', $request->jobtype)->pluck('id')->toArray();
            $query->whereIn('job_type_id', $typeIds);
        }

        $jobs = $query->paginate(20);



        return view('frontend.pages.jobs-index', compact('jobs', 'countries', 'jobCategories', 'jobTypes', 'selectedStates', 'selectedCites'));
    }

    function show(string $slug) : View {
        $job = Job::where('slug', $slug)->firstOrFail();
        $openJobs = Job::where('company_id', $job->company->id)->where('status', 'active')->where('deadline', '>=', date('Y-m-d'))->count();
        return view('frontend.pages.job-show', compact('job', 'openJobs'));
    }
}
