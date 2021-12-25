<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller {

	/**
	 * Initiate at run
	 *
	 * @return \Illuminate\Http\Response
	 */
	function __construct() {
		$this->middleware('permission:role.list|role.create|role.edit|role.delete', ['only' => ['index', 'show']]);
		$this->middleware('permission:role.create', ['only' => ['create', 'store']]);
		$this->middleware('permission:role.edit', ['only' => ['edit', 'update']]);
		$this->middleware('permission:role.delete', ['only' => ['destroy']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$roles = Role::orderBy('id', 'DESC')->paginate(5);
		return inertia('roles.index', ['roles' => $roles])
			->with('i', ($request->input('page', 1) - 1) * 5);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$permission = Permission::get();
		return inertia('roles.create', ['permission' => $permission]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required|unique:roles,name',
			'permission' => 'required',
		]);

		$role = Role::create(['name' => $request->input('name')]);
		$role->syncPermissions($request->input('permission'));

		return redirect()->route('roles.index')
			->with('success', 'Role created successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function show(Role $role) {
		$rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
			->where("role_has_permissions.role_id", $role->id)
			->get();

		return inertia('roles.show', ['role' => $role, 'rolePermissions' => $rolePermissions]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Role $role) {
		$permission = Permission::get();
		$rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $role->id)
			->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
			->all();

		return inertia('roles.edit', ['role' => $role, 'permission' => $permission, 'rolePermissions' => $rolePermissions]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Role $role) {
		$this->validate($request, [
			'name' => 'required',
			'permission' => 'required',
		]);

		$role->name = $request->input('name');
		$role->save();

		$role->syncPermissions($request->input('permission'));

		return redirect()->route('roles.index')
			->with('success', 'Role updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Role $role) {
		$role->delete();

		return redirect()->route('roles.index')
			->with('success', 'Role deleted successfully');
	}
}
