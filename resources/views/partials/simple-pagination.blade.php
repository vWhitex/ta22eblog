@if ($paginator->hasPages())
    <nav class="flex justify-center space-x-4 my-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-disabled">@lang('pagination.previous')</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-outline">@lang('pagination.previous')</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-outline">@lang('pagination.next')</a>
        @else
            <span class="btn btn-disabled">@lang('pagination.next')</span>
        @endif
    </nav>
@endif
