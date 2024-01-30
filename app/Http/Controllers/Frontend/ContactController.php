<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactMailRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    function index() : View {
        return view('frontend.pages.contact');
    }

    function sendMail(ContactMailRequest $request) {
        dd($request->all());
    }
}
