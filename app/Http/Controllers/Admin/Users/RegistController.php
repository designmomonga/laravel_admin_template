<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;

class RegistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    protected $guarded = array('id');
    public function __invoke(UserCreateRequest $request)
    {
        $user = new User;
        $user->password_raw = $request->password;//入力されたパスワードをハッシュ化しないで別のカラムに保存しておく
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect()
            ->route('admin.user.home')
            ->with(['result' => '新規ユーザーを登録しました。', 'result_type' => 'reg']);
    }
}
