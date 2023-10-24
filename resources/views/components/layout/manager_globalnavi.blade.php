<div class="l-secondary__inner">
    <nav class="p-gnav">
        <ul>
            <li>
                <div class="p-gnav__category">
                    @if($slot == 'home')
                    <a href="#" class="p-gnav__current">
                    @else
                    <a href="#">
                    @endif
                        <i class="fa-solid fa-house-chimney p-gnav__category__head-icon"></i>
                        <span>ホーム</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="p-gnav__category c-accordion">
                    @if($slot == 'category01')
                    <a href="#" class="p-angle--right p-gnav__current">
                    @else
                    <a href="#" class="p-angle--right">
                    @endif
                        <i class="fa-solid fa-people-group"></i>
                        <span>調査員</span>
                    </a>
                    <div class="c-accordion__cross-line">
                        <span class="c-accordion__cross-line__body"></span>
                    </div>
                </div>
                <div class="p-gnav__sub">
                    <div class="p-gnav__sub__inner">
                        <ul>
                            <li>
                                <a href="#">調査員一覧</a></li>
                            <li><a href="#">調査員新規登録</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="p-gnav__category c-accordion">
                    @if($slot == 'category02')
                    <a href="#" class="p-angle--right p-gnav__current">
                    @else
                    <a href="#" class="p-angle--right">
                    @endif
                        <i class="fa-regular fa-folder-open"></i>
                        <span>調査案件</span>
                    </a>
                    <div class="c-accordion__cross-line">
                        <span class="c-accordion__cross-line__body"></span>
                    </div>
                </div>
                <div class="p-gnav__sub">
                    <div class="p-gnav__sub__inner">
                        <ul>
                            <li><a href="#">案件一覧</a></li>
                            <li><a href="#">案件新規登録</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</div>