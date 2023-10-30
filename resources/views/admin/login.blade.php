<x-layout.admin_foundation title="ログイン｜{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">login</x-slot>

<div class="wrapper auth">

    <article class="p-iarea">
        <h1 class="p-iarea__ttl">{{ config('const_admin.SYS_NAME') }}です。</h1>
        <p class="p-iarea__read">ログインには下記の情報を入力ください。</p>

        <section class="p-login-info">
            <h2 class="p-login-info__ttl">[ログイン情報]</h2>
            <dl class="p-login-info__list">
                <dt>メールアドレス</dt>
                <dd>master@design-momonga.jp</dd>
                <dt>パスワード</dt>
                <dd>password</dd>
            </dl>
        </section>

        @if ($errors->any())
        <section class="c-error-message">
            <h2 class="c-error-message__ttl">下記のエラーがあります。</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf
            <dl class="p-ilist">
                <dt class="p-ilist__ttl">登録メールアドレス</dt>
                <dd class="p-ilist__input">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="master@design-momonga.jp">
                </dd>
                <dt class="p-ilist__ttl">パスワード</dt>
                <dd class="p-ilist__input">
                    <div class="pw__wrap">
                        <input type="password" name="password" id="textPassword" placeholder="password">
                        <span id="buttonEye" class="fa fa-eye" onclick="pushHideButton()"></span>
                    </div>
                </dd>
            </dl>
            <p class="btn__layouter u-txt-c">
                <button type="submit" class="c-btn__submit c-btn__color--default">ログイン</button>
            </p>
        </form>
    </article>

</div>

</x-layout.admin_base>