@props(['disabled' => false])

<style>
    .harmonic-input {
        border: 1.5px solid #BF7E45;
        background-color: rgba(242, 202, 153, 0.7);
        color: #592B02;
        border-radius: 6px;
        padding: 0.4rem 0.6rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        outline: none;
        transition: border-color 0.3s ease;
    }
    .harmonic-input:focus {
        border-color: #D99036;
        box-shadow: 0 0 6px #D99036;
    }
    .harmonic-input:disabled {
        background-color: #f0e6d2;
        color: #bf7e45;
        border-color: #d99036;
        cursor: not-allowed;
        box-shadow: none;
    }
</style>

<input
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'harmonic-input']) }}
>
