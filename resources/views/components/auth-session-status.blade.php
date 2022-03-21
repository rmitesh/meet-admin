@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-dismissible fade show', 'role' => 'alert']) }}>
        <p class="m-0">{{ $status }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
