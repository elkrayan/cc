@extends('layouts.container')

@section('title', 'CC • Nouvelle demande')

@section('main')
    <div class="panel w-full">
        <form action="" class="flex md:flex-wrap">
            @csrf
            <div class="input-group w-full mb-3 lg:w-1/2 md:px-2">
                <label for="">Nom du patient</label>
                <input type="text" name="" id="" class="rounded">
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Prénom du patient</label>
                <input type="text" name="" id="" class="rounded">
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Date de naissance du patient</label>
                <input type="date" name="" id="" class="rounded">
            </div>

            <div class="input-group w-full blank">

            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Niss ?</label>
                <div class="flex flex-row justify-between w-1/2 mt-3">
                    <div class="flex flex-row items-baseline">
                        <input type="checkbox" name="" id="">
                        <label for="" class="ml-2">Oui</label>
                    </div>

                    <div class="flex flex-row items-baseline">
                        <input type="checkbox" name="" id="">
                        <label for="" class="ml-2">Oui</label>
                    </div>
                </div>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Langue</label>
                <select name="" id="" class="rounded">
                    <option value="">Selectionez une option</option>
                </select>
            </div>


            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Type de prélévement</label>
                <select name="" id="" class="rounded">
                    <option value="">Selectionez une option</option>
                </select>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Centre de prélévement</label>
                <select name="" id="" class="rounded">
                    <option value="">Selectionez une option</option>
                </select>
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Adresse mail du patient</label>
                <input type="email" name="" id="" class="rounded">
            </div>

            <div class="input-group w-full mb-3 md:w-1/2 md:px-2">
                <label for="">Numéro de téléphone du patient</label>
                <input type="tel" name="" id="" class="rounded">
            </div>

            <div class="buttons w-full flex flex-row justify-end">
                <button class="bg-sky-600 text-white rounded">Envoyer</button>
            </div>
        </form>
    </div>
@endsection
