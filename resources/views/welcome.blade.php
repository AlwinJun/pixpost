<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="mt-6 grid gap-4 lg:grid-cols-3">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex flex-wrap gap-3">
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
                <x-tag name="tag" />
                <x-tag name="full-stack" />
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-4">
                <x-job-card-expanded />
                <x-job-card-expanded />
                <x-job-card-expanded />
            </div>
        </section>
    </div>
</x-layout>
