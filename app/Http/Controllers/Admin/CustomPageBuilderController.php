<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomPageBuilder;
use App\Services\Notify;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomPageBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $pages = CustomPageBuilder::all();
        return view('admin.page-builder.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.page-builder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => ['required', 'max:255'],
            'content' => ['required']
        ]);

        $page = new CustomPageBuilder();
        $page->page_name = $request->page_name;
        $page->content = $request->content;
        $page->save();

        Notify::createdNotification();

        return to_route('admin.page-builder.index');
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
