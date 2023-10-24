<x-layout.front_base title="ユーザー登録｜なのはな探偵手帳">
<x-slot name="page_name">f-register</x-slot>

<div class="wrapper auth">
    <div class="p-iarea">
        <h1 class="p-iarea__ttl">新規ユーザー登録</h1>
        <p class="p-iarea_read">新規ユーザー登録には下記の情報を入力ください。</p>

        @if ($errors->any())
        <section class="p-err">
            <h2 class="p-err__ttl">下記のエラーがあります。</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
        @endif

        <form action="{{ route('register') }}" method="post">
            @csrf
            <dl class="p-ilist">
                <dt class="p-ilist__ttl">氏名</dt>
                <dd class="p-ilist__input">
                    <input type="text" name="name" value="{{ old('name') }}">
                </dd>
                <dt class="p-ilist__ttl">登録メールアドレス</dt>
                <dd class="p-ilist__input">
                    <input type="text" name="email" value="{{ old('email') }}">
                </dd>
                <dt class="p-ilist__ttl">パスワード（半角英数8文字以上）</dt>
                <dd class="p-ilist__input">
                    <input type="text" name="password">
                </dd>
                <dt class="p-ilist__ttl">パスワード再入力</dt>
                <dd class="p-ilist__input">
                    <div class="pw__wrap">
                        <input type="password" name="password_confirmation" id="textPassword">
                        <span id="buttonEye" class="fa fa-eye" onclick="pushHideButton()"></span>
                    </div>
                </dd>
            </dl>
            <p class="btn__layouter txt-c">
                <button type="submit" class="c-btn__submit c-btn__color--blue">新規登録</button>
            </p>
        </form>
        <p class="p-link__reg txt-r">
            <a href="{{ route('login') }}">ログイン画面</a>
        </p>
    </div>
</div>

</x-layout.front_base>