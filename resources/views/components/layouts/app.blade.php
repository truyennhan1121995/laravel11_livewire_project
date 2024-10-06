<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Laravel Livewire' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container py-3">
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            {{ $slot }}
        </div>
        @vite('resources/js/app.js');
    </body>
</html>
