@props(['job'])

<x-panel class="flex flex-col text-center">
    <a href="#" class="text-left">{{ ucfirst($job->employer->name) }}</a>

    <div class="py-8">
        <h4 class="text-xl font-bold transition-colors duration-300 group-hover:text-blue-600">
            {{ ucfirst($job->title) }}
        </h4>
        <p class="mt-2 text-sm">{{ ucfirst($job->schedule) }} From {{ $job->salary }}</p>
    </div>

    <div class="mt-auto flex items-center justify-between">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>

        <x-employer-logo :logo="$job->employer->logo" size="42" />
    </div>
</x-panel>
