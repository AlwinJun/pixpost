<x-layout>
    <x-slot:title>New Job</x-slot:title>

    <x-forms.form method="POST" action="{{ route('jobs.store') }}">
        <x-forms.input label="Title" name="title" placeholder="Laravel Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="90,000 PHP" />
        <x-forms.input label="Location" name="location" placeholder="Makati, Manila" />

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black" value="Full Time">Full Time</option>
            <option class="text-black" value="Part Time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url"
            placeholder="https://mycompanieswebsite.com/jobs/laravel-developer-wanted" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laravel, tech, web-development" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
