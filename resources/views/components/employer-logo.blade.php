@props(['logo', 'size' => 100])

<img src="https://picsum.photos/seed/{{ rand(0, 100) }}/{{ $size }}" alt="employer logo" class="rounded-xl">
