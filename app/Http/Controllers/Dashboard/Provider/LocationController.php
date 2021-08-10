<?php

namespace App\Http\Controllers\Dashboard\Provider;

use App\Models\Location;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LocationRequest;

class LocationController extends Controller
{
    public function index(Request $request, Provider $provider)
    {
        $locations = $provider->locations()->latest()->paginate();
        return view('dashboard.providers.locations.index', compact('provider', 'locations'));
    } //end of index

    public function create(Provider $provider)
    {
        return view('dashboard.providers.locations.create', compact('provider'));
    } //end of create

    public function store(LocationRequest $request, Provider $provider)
    {
        $provider->locations()->create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.providers.locations.index', $provider->id);
    } //end of store

    public function edit(Provider $provider, Location $location)
    {
        return view('dashboard.providers.locations.edit', compact('provider', 'location'));
    } //end of user

    public function update(LocationRequest $request, Provider $provider, Location $location)
    {
        $location->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.providers.locations.index', $provider->id);
    } //end of update

    public function destroy(Provider $provider, Location $location)
    {
        $location->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.providers.locations.index', $provider->id);
    } //end of destroy

} //end of controller
