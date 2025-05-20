<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 hover:opacity-90',
    'style' => 'background-color: #E0AA3E;'
]) }}>
    {{ $slot }}
</button>
