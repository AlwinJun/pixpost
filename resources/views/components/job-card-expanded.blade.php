<x-panel class="flex space-x-6">
    <div class="">
        <x-employer-logo :logo="$job->employer->logo" />
    </div>

    <div class="flex flex-1 flex-col">
        <a href="#" class="text-sm text-gray-400">{{ ucfirst($job->employer->name) }}</a>
        <h4 class="mt-1 text-xl font-bold transition-colors duration-300 group-hover:text-blue-600">
            {{ ucfirst($job->title) }}</h4>
        <p class="mt-auto text-sm text-gray-400">{{ ucfirst($job->schedule) }} From {{ $job->salary }}</p>
    </div>

    <div class="space-x-1">
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>
