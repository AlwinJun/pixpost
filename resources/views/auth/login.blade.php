<x-layout>
    <x-slot:title>Login</x-slot:title>

    <x-forms.form method="POST" action="{{ route('login.store') }}">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.button class="mx-auto block">Login</x-forms.button>
    </x-forms.form>
</x-layout>
