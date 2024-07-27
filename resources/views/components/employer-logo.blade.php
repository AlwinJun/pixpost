@props(['logo', 'size' => 100])

<img src="{{ asset($logo) }}" alt="employer logo" class="rounded-xl" width={{ $size }}">
