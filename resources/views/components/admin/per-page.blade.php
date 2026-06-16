<form method="GET"
      action="{{ url()->current() }}"
      class="d-inline per-page-form">

    <div class="per-page-wrapper">
        <select name="per_page"
                class="per-page-select"
                onchange="this.form.submit()">

            @foreach($options as $option)
                <option value="{{ $option }}"
                    @selected(request('per_page', 5) == $option)>
                    На сторінку: {{ $option }}
                </option>
            @endforeach
        </select>
    </div>

    <input type="hidden" name="table_search" value="{{ request('table_search') }}">
    <input type="hidden" name="page" value="1">
</form>
<style>
    .per-page-form {
        margin-right: 12px;
    }

    .per-page-wrapper {
        position: relative;
        display: inline-block;
    }

    .per-page-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;

        background: #fff;
        color: #0d6efd;

        border: 1px solid #0d6efd;
        border-radius: 6px;

        height: 49px;
        padding: 0 40px 0 14px;

        font-size: 14px;
        font-weight: 600;

        cursor: pointer;

        transition: all 0.2s ease-in-out;
        min-width: 140px;
    }

    .per-page-select:focus {
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
    }

    .per-page-wrapper::after {
        content: "▾";
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 12px;
    }
</style>
