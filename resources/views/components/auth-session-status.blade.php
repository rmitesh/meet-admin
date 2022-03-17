@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert']) }}>
        <p class="m-0">{{ $status }}</p>
    </div>
@endif
