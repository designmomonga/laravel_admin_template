<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\UserStatus;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $roles = Role::get()->where('id', '>', '1');
        $statuses = UserStatus::get();
        //dd($roles);
        return view('admin.user_create', ['roles' => $roles, 'statuses' => $statuses]);
    }
}
