@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Pixel Positions</title>
</head>

<body class="bg-black pb-10 font-hanken-grotesk text-white">
    <div class="px-10">
        <nav class="flex items-center justify-between border-b border-white/10 py-4">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="website logo">
                </a>
            </div>

            <div class="space-x-5 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div>
                    <div class="space-x-5 font-bold">
                        <a href="#">Post a Job</a>
                        <x-forms.form method="POST" action="{{ route('login.destroy') }}" class="inline">
                            @method('DELETE')
                            <x-forms.button class="!mt-0">Logout</x-forms.button>
                        </x-forms.form>
                    </div>
                </div>
            @endauth

            @guest
                <div class="space-x-5 font-bold">
                    <a href="{{ route('register.create') }}">Sign Up</a>
                    <a href="{{ route('login.create') }}">Login</a>
                </div>
            @endguest
        </nav>

        <main class="mx-auto mt-10 max-w-[986px]">
            @isset($title)
                <h1 {{ $title->attributes->class(['text-4xl text-center font-bold']) }}>{{ $title }}</h1>
            @endisset

            {{ $slot }}
        </main>
    </div>
</body>

</html>
