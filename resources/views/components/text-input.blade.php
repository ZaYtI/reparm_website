@props(['disabled' => false, 'glassInput' => true])

<style>
    .glass-input {
        background: rgba(243, 243, 243, 0.15);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
        color: white;
    }
</style>

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'rounded-md shadow-sm' . ($glassInput ? ' glass-input' : ''),
]) !!}>
