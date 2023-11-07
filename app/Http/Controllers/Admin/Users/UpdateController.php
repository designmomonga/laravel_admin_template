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
       $user->password_raw = $request->password;//入力されたパスワードをハッシュ化しないカラムへ追加
       $form = $request->all();
       unset($form['_token'], $form['_method']);//保存に必要のない情報を削除
       //dd($form);
       $user->fill($form)->save();
       return redirect()
            ->route('admin.user.edit', ['userId' => $user->id])//クエリパラメータ含むリダイレクト先URLの生成
            ->with(['result' => 'ユーザー情報を更新しました。', 'result_type' => 'pull']);//フラッシュデータの付加
    }
}
