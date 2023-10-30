<x-layout.admin_basis title="ユーザー情報編集｜{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">user-update</x-slot>
<x-slot name="gnav_category">users</x-slot>

<header class="p-page-header">
    <h1 class="p-page-header__ttl">ユーザー情報編集</h1>
</header>

<p><a href="{{ route('admin.user.home') }}">ユーザー管理</a></p>



</x-layout.admin_basis>