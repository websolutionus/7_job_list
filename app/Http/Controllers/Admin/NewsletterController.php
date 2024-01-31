<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribers;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    use Searchable;

    function index() : View {

        $query = Subscribers::query();
        $this->search($query, ['email']);
        $subscribers = $query->orderBy('id', 'DESC')->paginate(20);
        
        return view('admin.newsletter.index', compact('subscribers'));
    }
}
