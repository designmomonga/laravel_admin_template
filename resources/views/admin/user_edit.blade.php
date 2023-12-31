<x-layout.admin_basis title="ユーザー情報編集｜{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">user-update</x-slot>
<x-slot name="gnav_category">users</x-slot>

<header class="p-page-header">
    <h1 class="p-page-header__ttl">ユーザー情報編集</h1>
</header>

<p class="u-mb-small"><a href="{{ route('admin.user.home') }}">ユーザー管理</a></p>

@if(session('result'))
<x-result_message></x-result_message>
@else
<p class="u-mb-small">こ下記のユーザー情報をを編集します。</p>
@endif

@if(count($errors) > 0)
<p class="u-err__title u-mb-small">入力内容にエラーがあります。</p>
@endif

<div class="p-new-user">
    <form action="{{ route('admin.user.update') }}" method="post" class="u-mb">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $user->id }}">
        <dl class="p-user__register c-form-layout--01 u-mb">
            <dt>ユーザー名（姓）</dt>
            <dd>
                <input type="text" name="last_name" value="{{ $user->last_name }}" placeholder="姓">
                @error('last_name')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>ユーザー名（名）</dt>
            <dd>
                <input type="text" name="first_name" value="{{ $user->first_name }}" placeholder="名">
                @error('first_name')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>かな（姓）</dt>
            <dd>
                <input type="text" name="last_name_kana" value="{{ $user->last_name_kana }}" placeholder="せい">
                @error('last_name_kana')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>かな（名）</dt>
            <dd>
                <input type="text" name="first_name_kana" value="{{ $user->first_name_kana }}" placeholder="めい">
                @error('first_name_kana')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>メールアドレス</dt>
            <dd>
                <input type="email" name="email" value="{{ $user->email }}">
                @error('email')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>パスワード（8文字以上、数字を含む）</dt>
            <dd>
                <input type="password" name="password" id="password" value="{{ $user->password_raw }}">
                <div class="u-mt-xxsmall">
                    <label><input type="checkbox" class="js-pw-display"><span>パスワードを表示</span></label>
                </div>
                @error('password')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>権限グループ</dt>
            <dd>
                <select name="role_id" class="minimal">
                    @foreach($roles as $role)
                    @if($role->id == $user->role_id)
                    <option value="{{ $role->id }}" selected>{{ $role->role_name }}</option>
                    @else
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endif
                    @endforeach
                </select>
            </dd>
            <dt>ステータス</dt>
            <dd>
                <select name="user_status_id" class="minimal">
                    @foreach($statuses as $status)
                    @if($status->id == $user->user_status_id)
                    <option value="{{ $status->id }}" selected>{{ $status->status_name }}</option>
                    @else
                    <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                    @endif
                    @endforeach
                </select>
            </dd>
        </dl>
        <p class="btn__layouter u-txt-c">
            <button type="submit" class="c-btn__submit c-btn__color--red">更新</button>
        </p>
    </form>
    <p class="u-txt-r js-modal__open">
        <span class="c-btn__delete"><i class="fa-regular fa-trash-can"></i>データの削除</span>
    </p>
</div>

<x-slot name="modal_name">user-delete</x-slot>
<x-slot name="modal_content">
    <form action="{{ route('admin.user.edit') }}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $user->id }}">
        <p class="u-mb-small u-txt-c"><i class="fa-solid fa-check c-icon__check c-icon--red"></i>データを削除してもよろしいですか？</p>
        <p class="btn__layouter u-txt-c">
            <button type="submit" class="c-btn__submit c-btn__color--red">削除</button>
        </p>
    </form>
</x-slot>

</x-layout.admin_basis>