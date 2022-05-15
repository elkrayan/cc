@extends('layouts.page')

@section('title', 'login')
@section('id', 'login')

@section('body')
<div class="flex flex-row">
    <main class="w-full md:w-1/2 items-center flex flex-col mt-10">
        <h1 class="text-2xl font-semibold">Connectez-vous à votre compte.</h1>
        <form action="" class="w-full mt-4">
            @csrf
            <div class="input-group my-5">
                <label for="">Username</label>
                <input type="text" placeholder="homer.simpson" class="rounded">
            </div>

            <div class="input-group my-5">
                <label for="">Password</label>
                <input type="password" placeholder="••••••••••" class="rounded">
            </div>

            <div class="buttons">
                <button class="bg-sky-600 w-full text-white rounded hover:bg-sky-700 mb-3 underline-offset-2">Hello</button>
                <a href="" class="">Mot de passe oublié ?</a>
            </div>
        </form>
    </main>
    <aside class="hidden md:block w-full">

    </aside>
</div>
@endsection
