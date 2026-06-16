@if ($paginator && $paginator->hasPages())
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="text-muted small">
            Showing {{ $paginator->firstItem() }}
            to {{ $paginator->lastItem() }}
            of {{ $paginator->total() }} results
        </div>

        <nav>
            <ul class="pagination pagination-md m-0">
                <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">‹</a>
                </li>

                @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach

                <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">›</a>
                </li>
            </ul>
        </nav>
    </div>
@endif
