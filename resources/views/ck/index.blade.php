@extends('layout')
@section('content')
    <div class="add-button p-3">
        <a href="{{ route('ck.create') }}">Add New</a>
    </div>
    <div class="table" style="margin-top: 20px; margin-bottom:100px;">
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            @foreach ($cks as $ck)
                <tr>
                    <td>{{ $ck->id }}</td>
                    <td>{{ $ck->name }}</td>
                    <td>{{ $ck->email }}</td>
                    <td>{{ $ck->password }}</td>
                    <td>
                        <a href="{{ route('ck.edit', $ck->id) }}">Edit</a>
                        <form action="{{ route('ck.destroy', $ck->id) }}" method="POST">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
