
@if ($paginator->hasPages())
<div class="paginating-container pagination-default">


    <ul class="pagination">
        {{-- @if ($paginator->onFirstPage()) --}}
        <li   class="prev">
            <button wire:click="previousPage">Prev</button>
            {{-- {!! __('pagination.previous') !!} --}}
        </li>
        {{-- @endif --}}
        {{-- <li><a href="javascript:void(0);">1</a></li>
        <li class="active"><a href="javascript:void(0);">2</a></li>
        <li><a href="javascript:void(0);">3</a></li> --}}

        {{-- @if ($paginator->hasMorePages()) --}}
        <li  class="next">
            <button wire:click="nextPage" >Next</button>
            {{-- {!! __('pagination.next') !!} --}}
        </li>
        {{-- @endif --}}
    </ul>

</div>
pkpokptkgprtg
@endif
