<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->when($request->search, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->latest()
            ->paginate();

        return view('dashboard.users.index', compact('users'));
    } //end of index

    public function create()
    {
        return view('dashboard.users.create');
    } //end of create

    public function store(UserRequest $request)
    {
        User::create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.users.index');
    } //end of store

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    } //end of user

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.users.index');
    } //end of update

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    } //end of destroy

} //end of controller
