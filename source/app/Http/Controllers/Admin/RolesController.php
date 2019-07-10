<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Request\RoleFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    //
    public function index() 
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }
    
    public function create() 
    {
        return view('backend.roles.create');
    }

    public function store(Request $request)
    {
        Role::create([ 'name' => $request->get('name')]);
        return redirect('admin/roles/create')->with('status', 'A new roles created!');
    }
}
