@if(session('result'))
<div class="c-result u-mb-small">
    @if(session('result_type') === 'reg')
        <p class="c-result__text c-result__text--reg">
    @elseif(session('result_type') === 'pull')
        <p class="c-result__text c-result__text--pull">
    @elseif(session('result_type') === 'del')
        <p class="c-result__text c-result__text--del">
    @else
        <p class="c-result__text">
    @endif
        {{ session('result') }}</p>
</div>
@endif