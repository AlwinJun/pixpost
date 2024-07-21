<x-layout>
    <x-slot:title>Register</x-slot:title>

    <x-forms.form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

        <x-forms.divider />
        {{-- Employer input --}}
        <x-forms.input label="Employer Name" name="employer_name" />
        <x-forms.input label="Employer Logo" name="employer_logo" type="file" />
        <x-forms.button class="mx-auto block">Create account</x-forms.button>
    </x-forms.form>
</x-layout>
