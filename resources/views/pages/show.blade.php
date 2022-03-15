@extends('layouts.app')
@section('content')
    <section class="w-50 mx-auto">
        <table class="table table-striped table-secondary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">email</th>
                    <th scope="col">tel</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">{{ $member->id }} </th>
                        <td>{{ $member->nom }} </td>
                        <td>{{ $member->age }} </td>
                        <td>{{ $member->email }} </td>
                        <td>{{ $member->tel }} </td>
                    </tr>
            </tbody>
        </table>
    </section>
@endsection
