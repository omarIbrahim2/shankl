
@if ($paginator->hasPages())
<div class="paginating-container pagination-default">


    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li   class="prev">
           prev
        </li>
        @else
        <li style="cursor: pointer"  wire:click="previousPage" class="prev">
            Prev
        </li>
        @endif

        @foreach ($elements as $element )
          @if (is_array($element))
               @foreach ($element as $page => $url )
                @if ($page  == $paginator->currentPage())
                <li class="p-2" style="cursor: pointer"  wire:click="gotoPage({{$page}})">{{$page}}</li>

                @else
                <li class="p-2" style="cursor: pointer" wire:click="gotoPage({{$page}})">{{$page}}</li>
                @endif

               @endforeach
          @endif
        @endforeach


        @if ($paginator->hasMorePages())
        <li style="cursor: pointer" class="next" wire:click="nextPage "  class="next">
          next
        </li>
        @else
        <li class="next" class="next">
            next
        </li>
        @endif
    </ul>

</div>
@endif
