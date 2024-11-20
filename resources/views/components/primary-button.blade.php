<button {{ $attributes->merge(['class' => 'btn btn-primary ' . $class]) }}>
    {{ $slot }}
</button>
