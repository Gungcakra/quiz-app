<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'pengguna')->get();
        return view('pages.admin.users.index', [
            'users' => $user
        ]);
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
