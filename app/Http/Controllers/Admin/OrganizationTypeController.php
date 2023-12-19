<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\View\View;

use function Ramsey\Uuid\v1;

class OrganizationTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $query = OrganizationType::query();
        $this->search($query, ['name']);
        $organizationTypes = $query->paginate(20);

        return view('admin.organization-type.index', compact('organizationTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.organization-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:organization_types,name']
        ]);

        $type = new OrganizationType();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification();

        return to_route('admin.organization-types.index');
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
