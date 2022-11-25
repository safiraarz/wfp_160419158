@extends('layouts.conquer')
@section('content')
<div class="container">
    <h2>Roles Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name of Roles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection