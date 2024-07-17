<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>
            <form action="" class="mt-6">
                <input type="search" name="" placeholder="Web Developer.."
                    class="w-full max-w-lg rounded-xl border border-white/10 bg-white/5 px-4 py-3" />
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="mt-6 grid gap-4 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex flex-wrap gap-3">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-4">
                @foreach ($jobs as $job)
                    <x-job-card-expanded :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
