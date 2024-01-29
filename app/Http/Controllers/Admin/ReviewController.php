<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewCreateRequest;
use App\Models\Review;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.review.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewCreateRequest $request)
    {
        $imagePath = $this->uploadFile($request, 'image');

        $review = new Review();
        $review->image = $imagePath;
        $review->name = $request->name;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        Notify::createdNotification();
        return to_route('admin.reviews.index');
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
