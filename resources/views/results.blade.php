<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <x-slot:title>Results</x-slot:title>

            <x-forms.form action="{{ route('search') }}" class="mt-6">
                <x-forms.input :label="false" name="q" type="search" placeholder="Web Developer.." />
            </x-forms.form>
        </section>

        <section>
            <div class="space-y-4 pt-6">
                @foreach ($jobs as $job)
                    <x-job-card-expanded :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
