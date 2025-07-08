<button {{ $attributes->merge([
    'class' => 'bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded'
]) }}>
    {{ $slot }}
</button>
