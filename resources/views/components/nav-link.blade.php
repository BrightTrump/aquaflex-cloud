@props(['active'])

@php
$classes = ($active ?? false)
            ? "after:content-[''] after:absolute after:h-2 after:bg-primary after:w-full after:left-0 after:bottom-0 after:rounded-t-lg"
            : " border-b-primary h-full";
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
