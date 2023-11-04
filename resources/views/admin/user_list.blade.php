<x-layout.admin_basis title="ユーザー一覧｜{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">user-index</x-slot>
<x-slot name="gnav_category">users</x-slot>

<header class="p-page-header">
    <h1 class="p-page-header__ttl">ユーザー管理</h1>
</header>

@if(session('result'))
<div class="c-result u-mb-small">
    <p class="c-result__text">新規ユーザーを登録しました。</p>
</div>
@endif

<div class="p-user-container">
    <p class="u-mb-small">
        <a class="c-btn__normal c-btn__round-corner--3 c-btn__color--red" href="{{ route('admin.user.create') }}">ユーザーを追加</a>
    </p>
    
    @if(count($users) > 0)
    <table class="p-user-index__list c-list-tbl">
        <thead>
            <tr>
                <th>No</th>
                <th>ユーザー名</th>
                <th class="u-tbl-cell-none-sp">かな</th>
                <th class="u-tbl-cell-none-sp">Email</th>
                <th class="u-tbl-cell-none-sp">権限グループ</th>
                <th>ステータス</th>
                <th>編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            @if($loop->even)
            <tr class="c-row-even">
            @else
            <tr>
            @endif
                <td class="u-txt-c">{{ $loop->iteration }}</td>
                <td>{{ $user->last_name }}&nbsp;{{  $user->first_name }}</td>
                <td class="u-tbl-cell-none-sp">{{ $user->last_name_kana }}&nbsp;{{ $user->first_name_kana }}</td>
                <td class="u-tbl-cell-none-sp">{{ $user->email }}</td>
                <td class="u-tbl-cell-none-sp">{{ $user->role->role_name }}</td>
                <td class="u-txt-c">{{ $user->userStatus->status_name }}</td>
                <td class="u-txt-c">
                    <a class="c-btn__normal c-btn__round-corner--3 c-btn__color--gray" href="{{ route('admin.user.update', ['userId' => $user->id]) }}">
                        編集
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>登録ユーザーはありません。</p>
    @endif
</div>

</x-layout.admin_basis>