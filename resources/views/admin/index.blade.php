<x-layout.admin_basis title="{{ config('const_admin.SYS_NAME') }}">
<x-slot name="page_name">admin-index</x-slot>
<x-slot name="gnav_category">home</x-slot>

<header class="p-page-header">
    <h1 class="p-page-header__ttl">{{ config('const_admin.SYS_NAME') }}ホーム</h1>
</header>

<article class="p-mv">
    <section class="c-content-panel">
        <h2 class="p-mv__ttl">TOPコンテンツ</h2>  
    </section>
</article>

<article class="p-column">

    <div class="p-column__primary">
        <section class="c-content-panel p-block p-block--01">
            <h3 class="p-block__ttl">block01</h3>
        </section>
        <section class="c-content-panel p-block p-block--02">
            <h3 class="p-block__ttl">block02</h3>
        </section>
    </div>
    <div class="p-column__secondary">
        <section class="c-content-panel p-block p-block--03">
            <h3 class="p-block__ttl">block03</h3>
        </section>
        <section class="c-content-panel p-block p-block--04">
                <h3 class="p-block__ttl">block04</h3>
        </section>
    </div>
    
</article>


</x-layout.admin_basis>