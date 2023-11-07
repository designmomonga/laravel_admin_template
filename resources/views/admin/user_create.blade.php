<x-layout.admin_basis title="新規ユーザーを追加｜{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">user-create</x-slot>
<x-slot name="gnav_category">users</x-slot>

<header class="p-page-header">
    <h1 class="p-page-header__ttl">新規ユーザーを追加</h1>
</header>

<p class="u-mb-small"><a href="{{ route('admin.user.home') }}">ユーザー管理</a></p>

<p class="u-mb-small">このサイトに追加する新規ユーザーを作成します。</p>

@if(count($errors) > 0)
<p class="u-err__title u-mb-small">入力内容にエラーがあります。</p>
@endif

<div class="p-new-user">
    <form action="{{ route('admin.user.create') }}" method="post">
        @csrf
        <dl class="p-user__register c-form-layout--01 u-mb-small">
            <dt>ユーザー名（姓）<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="姓">
                @error('last_name')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>ユーザー名（名）<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="名">
                @error('first_name')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>かな（姓）<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="text" name="last_name_kana" value="{{ old('last_name_kana') }}" placeholder="せい">
                @error('last_name_kana')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>かな（名）<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="text" name="first_name_kana" value="{{ old('first_name_kana') }}" placeholder="めい">
                @error('first_name_kana')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>メールアドレス<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>パスワード（8文字以上、数字を含む）<span class="c-hissu">必須</span></dt>
            <dd>
                <input type="text" name="password">
                @error('password')
                <p class="u-err__txt u-mt-xxsmall">{{ $message }}</p>
                @enderror
            </dd>
            <dt>権限グループ<span class="c-hissu">必須</span></dt>
            <dd>
                <select name="role_id" class="minimal">
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </dd>
            <dt>ステータス<span class="c-hissu">必須</span></dt>
            <dd>
                <select name="user_status_id" class="minimal">
                    @foreach($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                    @endforeach
                </select>
            </dd>
        </dl>
        <p class="btn__layouter u-txt-c">
            <button type="submit" class="c-btn__submit c-btn__color--red">追加</button>
        </p>
    </form>
</div>

</x-layout.admin_basis>