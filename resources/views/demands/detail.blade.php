@extends('layouts.container')

@section('title', 'CC • Nouvelle demande')

@section('main')
    <div class="panel w-full">
        <form action="" class="flex md:flex-wrap">
            @csrf
            <div class="input-group w-full mb-3 lg:w-1/2 md:px-2">
                <label for="">Nom du patient</label>
                <input type="text" name="" value="Doe" class="rounded" readonly>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Prénom du patient</label>
                <input type="text" name="" value="Jhon" class="rounded" readonly>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Date de naissance du patient</label>
                <input type="text" name="" value="01/01/1999" class="rounded" readonly>
            </div>

            <div class="input-group w-full blank">

            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Langue</label>
                <input type="text" name="" value="Français" class="rounded" readonly>

            </div>


            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Type de prélévement</label>
                <input type="text" name="" value="Fédéral" class="rounded" readonly>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Centre de prélévement</label>
                <input type="text" name="" value="Forest" class="rounded" readonly>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Adresse mail du patient</label>
                <input type="text" name="" value="jd@exemple.com" class="rounded" readonly>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Numéro de téléphone du patient</label>
                <input type="text" name="" value="049876543" class="rounded" readonly>
            </div>

            <div class="buttons w-full flex flex-row justify-end">
                <button class="bg-sky-600 text-white rounded">Envoyer</button>
            </div>
        </form>
    </div>
@endsection
