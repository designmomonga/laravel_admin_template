<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //ユーザーリストを取得
        $users = User::with('role', 'userStatus')->get();
        //dd($users);
        return view('admin.user_list', ['users' => $users]);
    }
}
