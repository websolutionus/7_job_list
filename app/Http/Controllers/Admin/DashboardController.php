<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index() : View {
        $amounts = Order::pluck('default_amount')->toArray();
        $totalEarnings = calculateEarnings($amounts);
        $totalCandidates = Candidate::count();
        $totalCompanies = Company::count();
        $totalJobs = Job::count();
        $activeJobs = Job::where('deadline', '>=', date('Y-m-d'))->count();
        $expiredJobs = Job::where('deadline', '<=', date('Y-m-d'))->count();
        $pendingJobs = Job::where('status', 'pending')->count();
        $totalBlogs = Blog::count();




        return view('admin.dashboard.index', compact('totalEarnings', 'totalCandidates', 'totalCompanies', 'totalJobs', 'activeJobs', 'expiredJobs', 'pendingJobs', 'totalBlogs'));
    }
}
