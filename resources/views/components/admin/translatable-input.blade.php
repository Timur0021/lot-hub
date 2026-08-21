@props([
    'name',
    'label',
    'model' => null,
    'locales' => config('app.locales'),
    'placeholders' => [],
])

<div class="mb-3">
    <label class="form-label">
        {{ $label }}
    </label>

    <ul class="nav nav-tabs" role="tablist">
        @foreach($locales as $locale => $localeName)
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link {{ $loop->first ? 'active' : '' }}"
                    id="{{ $name }}-{{ $locale }}-tab"
                    data-toggle="tab"
                    data-target="#{{ $name }}-{{ $locale }}"
                    type="button"
                    role="tab"
                >
                    {{ $localeName }}
                </button>
            </li>
        @endforeach
    </ul>

    <div class="tab-content border border-top-0 rounded-bottom p-3">
        @foreach($locales as $locale => $localeName)
            <div
                class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                id="{{ $name }}-{{ $locale }}"
                role="tabpanel"
            >
                <input
                    type="text"
                    name="{{ $name }}[{{ $locale }}]"
                    class="form-control"
                    placeholder="{{ $placeholders[$locale] ?? '' }}"
                    value="{{ old(
                        $name . '.' . $locale,
                        $model?->getTranslation($name, $locale, false)
                    ) }}"
                >

                @error($name . '.' . $locale)
                    <span class="invalid-feedback d-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
