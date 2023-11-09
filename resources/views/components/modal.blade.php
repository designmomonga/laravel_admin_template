<div id="{{ $modal_name }}" class="c-modal">
	<div class="c-modal__bg js-modal__close"></div>
	<div class="c-modal__content">
		
		<div class="c-cross-mark c-modal__cross-mark--position js-modal__close">
            <span class="c-cross-mark__body c-modal--hidden"></span>
        </div>
		
		<div class="c-modal__content-inner">
			{{  $slot }}
		</div>
		
	</div>
</div>