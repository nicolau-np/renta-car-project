<div>
    @if ($objects->hasPages())
    <ul class="pagination pagination-sm no-margin pull-right">
        <li><a href="{{ $objects->onFirstPage() ? '#' : $objects->previousPageUrl() }}">«</a></li>

        @for ($i = 1; $i <= $objects->lastPage(); $i++)
            <li class="{{ $i == $objects->currentPage() ? 'active' : '' }}">
                <a href="{{ $i == $objects->currentPage() ? '#' : $objects->url($i) }}">{{ $i }}</a>
            </li>
            @endfor

            <li><a href="{{ $objects->hasMorePages() ? $objects->nextPageUrl() : '#' }}">»</a></li>
    </ul>
    @endif

</div>