<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderRequest;

class ProviderController extends Controller
{
    public function index(Request $request)
    {
        $providers = Provider::query()
            ->when($request->search, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->latest()
            ->paginate();

        return view('dashboard.providers.index', compact('providers'));
    } //end of index

    public function create()
    {
        return view('dashboard.providers.create');
    } //end of create

    public function store(ProviderRequest $request)
    {
        Provider::create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.providers.index');
    } //end of store

    public function edit(Provider $provider)
    {
        return view('dashboard.providers.edit', compact('provider'));
    } //end of user

    public function update(ProviderRequest $request, Provider $provider)
    {
        $provider->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.providers.index');
    } //end of update

    public function destroy(Provider $provider)
    {
        $provider->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.providers.index');
    } //end of destroy

} //end of controller
