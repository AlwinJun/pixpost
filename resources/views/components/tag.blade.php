@props(['name', 'size' => 'base'])

@php
    $classes = 'rounded-xl bg-white/10 transition-colors duration-200 hover:bg-white/25';

    if ($size == 'base') {
        $classes .= ' px-5 py-1 text-sm';
    } elseif ($size == 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="#" class="{{ $classes }}"> {{ ucfirst($name) }} </a>
