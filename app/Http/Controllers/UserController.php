<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller {

	/**
	 * Initiate at run
	 *
	 * @return \Illuminate\Http\Response
	 */
	function __construct() {
		$this->middleware('permission:user.list|user.create|user.edit|user.delete', ['only' => ['index', 'show']]);
		$this->middleware('permission:user.create', ['only' => ['create', 'store']]);
		$this->middleware('permission:user.edit', ['only' => ['edit', 'update']]);
		$this->middleware('permission:user.delete', ['only' => ['destroy']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$users = User::orderBy('id', 'DESC')->paginate(5);

		return inertia('User/Index', [
			'users' => $users
		])->with('i', ($request->input('page', 1) - 1) * 5);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$roles = Role::pluck('name', 'name')->all();

		return inertia('users.create', ['roles' => $roles]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'first_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'middle_name' => ['bail', 'nullable', 'string', 'min:3', 'max:32'],
			'last_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'date_of_birth' => ['bail', 'nullable', 'date'],
			'gender' => ['bail', 'required', 'string', 'in:female,male,others'],
			'username' => ['bail', 'required', 'string', 'min:3', 'max:16', Rule::unique('users')],
			'phone' => ['bail', 'required', 'numeric', Rule::unique('users')],
			'email' => ['bail', 'required', 'email', 'min:3', 'max:128', Rule::unique('users')],
			'password' => Password::required(), // $this->passwordRules(), // ['required', 'same:confirm-password'],
			#
			'roles'					=> ['required']
		]);

		$input = $request->all();
		$input['password'] = Hash::make($input['password']);

		$user = User::create($input);

		$user->assignRole($request->input('roles'));

		return redirect()->route('users.index')
			->with('success', 'User created successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		return inertia('users.show', ['user' => $user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {
		$roles		= Role::pluck('name', 'name')->all();
		$userRole	= $user->roles->pluck('name', 'name')->all();

		return inertia('users.edit', [
			'user' => $user, 'roles' => $roles, 'userRole' => $userRole
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user) {
		$validated = $request->validate([
			'first_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'middle_name' => ['bail', 'nullable', 'string', 'min:3', 'max:32'],
			'last_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'date_of_birth' => ['bail', 'nullable', 'date'],
			'gender' => ['bail', 'required', 'string', 'in:female,male,others'],
			'username' => ['bail', 'required', 'string', 'min:3', 'max:16', Rule::unique('users')],
			'phone' => ['bail', 'required', 'numeric', Rule::unique('users')],
			'email' => ['bail', 'required', 'email', 'min:3', 'max:128', Rule::unique('users')],
			'password' => ['nullable', 'same:confirm-password'],
			#
			'roles'					=> ['required']
		]);

		$input = $request->all();
		if (!empty($input['password'])) {
			$input['password'] = Hash::make($input['password']);
		} else {
			$input = Arr::except($input, array('password'));
		}

		$user->update($input);
		// DB::table('model_has_roles')->where('model_id', $user->id)->delete();

		$user->assignRole($request->input('roles'));

		return redirect()->route('users.index')
			->with('success', 'User updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		$user->delete();

		return redirect()->route('users.index')
			->with('success', 'User deleted successfully');
	}

	public function getAllPermissions(User $user) {
		$permissions = [];
		if ($user) {
			$permissions =  $user->getAllPermissions()->pluck('name');
		}

		return collect($permissions);
	}
}
