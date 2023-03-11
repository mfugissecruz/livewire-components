<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <livewire:styles />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="flex bg-slate-700 text-white items-center justify-center">
            <a href="{{ route('counter') }}" class="py-4 px-6 hover:bg-slate-700 {{ request()->routeIs('counter') ? 'bg-slate-800' : '' }}">Counter</a>
            <a href="{{ route('calculator') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('calculator') ? 'bg-slate-800' : '' }}">Calculator</a>
            <a href="{{ route('todo-list') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('todo-list') ? 'bg-slate-800' : '' }}">TodoList</a>
            <a href="{{ route('cascading-dropdown') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('cascading-dropdown') ? 'bg-slate-800' : '' }} ">Cascading Dropdown</a>
            <a href="{{ route('products') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('products') ? 'bg-slate-800' : '' }}">Product Search</a>
            <a href="{{ route('image-upload') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('image-upload') ? 'bg-slate-800' : ''  }}">Image Upload</a>
            <a href="{{ route('register') }}" class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('register') ? 'bg-slate-800' : ''  }}">Register</a>
        </nav>
       {{ $slot }}
       <livewire:scripts />
    </body>
</html>
