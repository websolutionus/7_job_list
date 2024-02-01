<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath = $this->uploadFile($request, 'logo');
        Footer::updateOrCreate(
            ['id' => 1],
            [
                'logo' => $imagePath,
                'details' => $request->details
            ]
        );

        Notify::updatedNotification();

        return redirect()->back();
    }

}
