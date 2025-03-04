<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index() {
        $permissions = Permission::get();
        return view('admin.role-permission.permission.index', [
            'permissions' =>$permissions
        ]);
    }

    public function create() {
        return view('admin.role-permission.permission.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status', 'Permission Created Sucessfully');

    }

    public function edit(Permission $permission) {

        return view('admin.role-permission.permission.edit', [
            'permission' => $permission
        ]);
    }

    public function update(Request $request, Permission $permission) {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status', 'Permission Updated Sucessfully');

    }

    public function destroy($permissionsId) {
        $permission = Permission::find($permissionsId);
        $permission-> delete();
        return redirect('permissions')->with('status', 'Permission Deleted Sucessfully');
    }
}
