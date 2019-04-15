<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $role = Role::create([
            'name' => $request->input('name'),
        ]);

            if ($role) {
                return redirect()->route('roles.show', ['role' => $role])
                                     ->with('success', 'Role created successfully');
            }

            return back()->withInput()->with('error', 'Error creating a new role please login to proceed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = Role::find($role->id);

        return view('roles.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = Role::find($role->id);

        return view('roles.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Role                $role
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if (Auth::check()) {
            $roleUpdate = Role::where('id', $role->id)
                                    ->update([
                                        'name' => $request->input('name'),
                                        ]);

            if ($roleUpdate) {
                return redirect()->route('roles.index', ['roleUpdate' => $roleUpdate])
                                     ->with('success', 'Role Updated successfully');
            }

            return back()->withInput()->with('error', 'Error updating role');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
    }
}
