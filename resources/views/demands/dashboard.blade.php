@extends('layouts.container')

@section('main')
    <div class="w-full">
        <table class="w-full" id="myTable">
            <thead>
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Langue</th>
                <th>Type</th>
                <th>Link</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>1961</td>
                <td>1961</td>
                <td><a href="" class="bg-sky-600 hover:bg-sky-700 rounded block text-center py-1 font-semibold text-white w-full">Go</a></td>
            </tr>
            <tr>
                <td>Witchy Woman</td>
                <td>The Eagles</td>
                <td>1972</td>
            </tr>
            <tr>
                <td>Shining Star</td>
                <td>Earth, Wind, and Fire</td>
                <td>1975</td>
            </tr>
            </tbody>
        </table>
    </div>

    <script>
        var dataTable = new DataTable("#myTable");
    </script>
@endsection
