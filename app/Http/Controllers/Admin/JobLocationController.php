<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobLocationCreateRequest;
use App\Models\Country;
use App\Models\JobLocation;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobLocationController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.job-location.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $countries = Country::all();

        return view('admin.job-location.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobLocationCreateRequest $request)
    {
        $imagePath = $this->uploadFile($request, 'image');

        $location = new JobLocation();
        $location->image = $imagePath;
        $location->country_id = $request->country;
        $location->status = $request->status;
        $location->save();

        Notify::createdNotification();

        return to_route('admin.job-location.index');
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
