<x-layout.manager_base title="Laravel Manager なのはな探偵手帳" pname="m-index">

<x-layout.manager_header></x-layout.manager_header>
<div class="l-container">
    <main class="l-primary">
        <header class="p-page-header">
            <h1 class="p-page-header__ttl">Laravel開発用管理画面サンプルホーム</h1>
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
    </main>
    <div class="l-secondary">
        <x-layout.manager_globalnavi>home</x-layout.manager_globalnavi>
    </div>
</div>
<x-layout.manager_footer></x-layout.manager_footer>

</x-layout.front_base>