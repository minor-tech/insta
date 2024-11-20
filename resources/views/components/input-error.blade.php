@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-danger mt-1 small']) }}>
        @foreach ((array) $messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
