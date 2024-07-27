<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <x-slot:title>Let's Find Your Next Job</x-slot:title>

            <x-forms.form action="{{ route('search') }}" class="mt-6">
                <x-forms.input :label="false" name="q" type="search" placeholder="Web Developer.." />
            </x-forms.form>
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
