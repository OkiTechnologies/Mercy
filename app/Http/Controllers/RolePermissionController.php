<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\RolePermission  $rolePermission
	 * @return \Illuminate\Http\Response
	 */
	public function show(Role $role, Permission $permission) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\RolePermission  $rolePermission
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Role $role, Permission $permission) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\RolePermission  $rolePermission
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Role $role, Permission $permission) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\RolePermission  $rolePermission
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Role $role, Permission $permission) {
		//
	}
}
