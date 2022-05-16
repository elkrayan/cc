@extends('layouts.page')

@section('body')
    <nav class="flex w-full mb-4 bg-sky-600 text-white">
        <a href="" class="brand">CC</a>
        <ul class="horizontal-list">
            <li class=""><a href="">Dashboard</a></li>
            <li class=""><a href="">Nouvelle demande</a></li>
            <li class=""><a href="">Support</a></li>
        </ul>
    </nav>
    <header class="container mx-auto my-2 flex w-full px-4">
        <h1 class="text-4xl font-semibold">Title</h1>
    </header>
    <main class="container mx-auto flex w-full px-4">
        @yield('main')
    </main>
    <footer class="flex w-full bg-red-500">
        FOOTER
    </footer>
@endsection
