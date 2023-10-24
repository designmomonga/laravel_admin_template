<header class="l-header">
    <div class="l-header__inner">
        <p class="l-header__sys-name">{{ config('const_manager.SYS_NAME') }}</p>
        <div class="l-header__info">
            <div class="l-header__profile">
                <div class="l-header__profile--sp">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="l-header__profile l-header__profile--pc">
                <div class="l-header__profile--pc">
                    <i class="fa-solid fa-user user-icon"></i>
                    <span>{{ Auth::user()->name }}</span>
                    <i class="fa-solid fa-caret-down caret-down-icon"></i>
                </div>
            </div>
            <div class="c-hamburger">
                <button type="button" class="c-hamburger__body">
                    <span class="c-hamburger__line"></span>
                </button>
		    </div>
        </div>  
        <div class="l-header__profile__menu">
            <ul>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket arrow-right-form-bracket"></i><span>ログアウト</span>
                    </a>
                </li>
            </ul>
        </div>
</header>