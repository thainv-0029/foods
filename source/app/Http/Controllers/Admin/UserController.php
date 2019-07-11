<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();
        return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));
    }

    public function update($id, UserUpdateRequest $request)
    {
        $user = User::whereId($id)->firstOrFail();
        $user->name = $request->get('name');
        // $user->email = $request->get('email');
        $user->email = $request->get('email') != null ? $request->get('email') : $user->email;
        // if($request->get('email') != null) {
        //     $user->email = $request->get('email');
        // }
        $password = $request->get('password');
        if ($password != "") {
            $user->password = Hash::make($password);
        }
        $user->save();
        $user->syncRoles($request->get('role'));
        return redirect(action('Admin\UserController@edit', $user->id))->with('status', 'The User has been updated!');
    }
}
