<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserStatus;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $roles = Role::get()->where('id', '>', '1');
        $statuses = UserStatus::get();

        $userId = $request->input('userId');
        //dd($request->input('userId'));
        $user = User::where('id', $userId)->firstOrFail();
        //dd($user);
        return view('admin.user_edit')
            ->with('user', $user)
            ->with('roles', $roles)
            ->with('statuses', $statuses);
    }
}
