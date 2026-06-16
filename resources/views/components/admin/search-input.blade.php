<form method="GET" action="{{ route('admin.team.index') }}" class="d-flex">
    <div class="input-group" style="width: {{ $with ?? '300px' }}">
        <input
            type="text"
            name="{{ $name ?? 'table_search' }}"
            class="form-control form-control-lg"
            placeholder="Search"
            value="{{ request($name ?? 'table_search') }}"
        >

        <div class="input-group-append">
            <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
