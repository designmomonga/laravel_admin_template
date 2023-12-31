<x-layout.admin_foundation title="{{ $title }}">
<x-slot name="page_name">{{ $page_name }}</x-slot>

<x-layout.admin_header></x-layout.admin_header>
<div class="l-container">
    <main class="l-primary">
    {{ $slot }}
    </main>
    <div class="l-secondary">
        <x-layout.admin_globalnavi>{{ $gnav_category }}</x-layout.admin_globalnavi>
    </div>
</div>
<x-layout.admin_footer></x-layout.admin_footer>
@isset($modal_name)
<x-modal>
    <x-slot name="modal_name">{{ $modal_name }}</x-slot>
    {{ $modal_content }}
</x-modal>
@endisset
</x-layout.admin_foundation>