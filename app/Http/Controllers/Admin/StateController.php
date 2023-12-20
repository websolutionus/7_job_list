<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StateController extends Controller
{
    use Searchable;

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $query = State::query();
        $query->with('country');
        $this->search($query, ['name']);
        $states = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.location.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $countries = Country::all();

        return view('admin.location.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'country' => ['required', 'integer']
        ]);

        $state = new State();
        $state->name = $request->name;
        $state->country_id = $request->country;
        $state->save();
        Notify::createdNotification();

        return to_route('admin.states.index');
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
