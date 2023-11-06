<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UserUpdateRequest $request)
    {
       $user = User::Where('id', $request->id)->firstOrFail();
       $form = $request->all();
       unset($form['_token']);
       $user->fill($form)->save();
       return redirect()
            ->route('admin.user.edit', ['userId' => $user->id])
            ->with(['result' => 'ユーザー情報を更新しました。', 'result_type' => 'pull']);
    }
}
