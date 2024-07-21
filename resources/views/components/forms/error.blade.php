@props(['error' => false])

@error($error)
    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror

{{-- @if ($error)
    <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
@endif --}}
