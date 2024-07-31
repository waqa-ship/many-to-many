<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::find(3);
        return $roles->user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(4);
        // $user->roles()->attach(1); to create role uncoment this line

        $user->roles()->detach(4);
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
