<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-2">
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
    </div>
</x-layout>
