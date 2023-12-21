<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\City;
use App\Models\Country;
use App\Traits\Searchable;

class CityController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $query = City::query();
        $query->with(['country', 'state']);
        $this->search($query, ['name']);
        $cities = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.location.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $countries = Country::all();
        return view('admin.location.city.create', compact('countries'));
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
