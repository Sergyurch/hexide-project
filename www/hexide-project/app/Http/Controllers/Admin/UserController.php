<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('admin.user.index', ['users' => User::paginate(10)]);
    }

    public function show($id) {
        return view('admin.user.show', ['user' => User::find($id)]);
    }

    public function destroy($id) {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }
}
