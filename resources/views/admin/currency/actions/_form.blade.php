<div class="mb-3">
    <label class="form-label">Code</label>
    <input
        type="text"
        name="code"
        class="form-control"
        placeholder="e.g. USD"
        value="{{ old('code', $currency->code ?? '') }}"
    >

    @error('code')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<x-admin.translatable-input
    name="name"
    label="Name"
    :model="$currency ?? null"
    :locales="[
        'uk' => '🇺🇦 Українська',
        'en' => '🇬🇧 English',
        'fr' => '🇫🇷 Français',
    ]"
    :placeholders="[
        'uk' => 'Наприклад: Долар США',
        'en' => 'e.g. US Dollar',
        'fr' => 'Par exemple : le dollar américain',
    ]"
/>

<div class="mb-3">
    <label class="form-label">Symbol</label>
    <input
        type="text"
        name="symbol"
        class="form-control"
        placeholder="e.g. $"
        value="{{ old('symbol', $currency->symbol ?? '') }}"
    >

    @error('symbol')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Exchange Rate</label>
    <input
        type="number"
        step="any"
        name="rate"
        class="form-control"
        placeholder="e.g. 1.0000"
        value="{{ old('rate', $currency->rate ?? '') }}"
    >

    @error('rate')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3 form-check">
    <input type="hidden" name="is_base" value="0">
    <input
        type="checkbox"
        name="is_base"
        class="form-check-input"
        id="isBase"
        value="1"
        @checked(old('is_base', $currency->is_base ?? false))
    >
    <label class="form-check-label" for="isBase">
        Base Currency
    </label>

    @error('is_base')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-4 form-check">
    <input type="hidden" name="active" value="0">
    <input
        type="checkbox"
        name="active"
        class="form-check-input"
        id="isActive"
        value="1"
        @checked(old('active', $currency->active ?? true))
    >
    <label class="form-check-label" for="isActive">
        Active
    </label>

    @error('active')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($currency) ? 'Update Currency' : 'Create Currency' }}
</button>
