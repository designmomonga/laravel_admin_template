<div class="l-secondary__inner">
    <nav class="p-gnav">
        <ul>
            <li>
                <div class="p-gnav__category">
                    @if($slot == 'home')
                    <a href="{{ route('admin.home') }}" class="p-gnav__current">
                    @else
                    <a href="{{ route('admin.home') }}">
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
                        <span>Menu01</span>
                    </a>
                    <div class="c-accordion__cross-line">
                        <span class="c-accordion__cross-line__body"></span>
                    </div>
                </div>
                <div class="p-gnav__sub">
                    <div class="p-gnav__sub__inner">
                        <ul>
                            <li>
                                <a href="#">Menu01_sub01</a></li>
                            <li><a href="#">Menu01_sub02</a></li>
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
                        <span>Menu02</span>
                    </a>
                    <div class="c-accordion__cross-line">
                        <span class="c-accordion__cross-line__body"></span>
                    </div>
                </div>
                <div class="p-gnav__sub">
                    <div class="p-gnav__sub__inner">
                        <ul>
                            <li><a href="#">Menu02_sub01</a></li>
                            <li><a href="#">Menu02_sub02</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</div>