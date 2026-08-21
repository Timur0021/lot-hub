@props([
    'value' => false,
    'trueText' => 'Yes',
    'falseText' => 'No',
])

<span
    class="badge px-3 py-2"
    style="
        background-color: {{ $value ? '#dcfce7' : '#fee2e2' }};
        color: {{ $value ? '#166534' : '#991b1b' }};
        font-size: 15px;
        font-weight: 600;
        border-radius: 9999px;
    "
>
    {{ $value ? $trueText : $falseText }}
</span>
