@extends('layouts.conquer')
@section('content')
<div class="container">
    <h2>User Table</h2>
    <div class="actions">
        <a href="{{url('users/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $d)
            <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>
                    @foreach($d->roles as $role)
                    {{$role->name}}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection