<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::where('id', $request->id)->firstOrFail();
        $user->delete();
        return redirect()
            ->route('admin.user.home')
            ->with(['result' => 'ユーザーを削除しました。', 'result_type' => 'del']);
    }
}
