<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Country;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobRole;
use App\Models\JobType;
use App\Models\SalaryType;
use App\Models\Skill;
use App\Models\Tag;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class jobController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Job::query();
        $this->search($query, ['title', 'slug']);
        $jobs = $query->paginate(20);

        return view('frontend.company-dashboard.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $companies = Company::where(['profile_completion' => 1, 'visibility' => 1])->get();
        $categories = JobCategory::all();
        $countries = Country::all();
        $salaryTypes = SalaryType::all();
        $experiences = Experience::all();
        $jobRoles = JobRole::all();
        $educations = Education::all();
        $jobTypes = JobType::all();
        $tags = Tag::all();
        $skills = Skill::all();
        return view('frontend.company-dashboard.job.create', compact(
            'companies',
            'categories',
            'countries',
            'salaryTypes',
            'experiences',
            'jobRoles',
            'educations',
            'jobTypes',
            'tags',
            'skills'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
