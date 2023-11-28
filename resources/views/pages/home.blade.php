@extends('layout')
@section('content')
    <div class="form p-5">
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name"><br /><br />
            <input type="text" name="email" placeholder="Email"><br /><br />
            <input type="text" name="password" placeholder="Password"><br /><br />
            <button type="submit">Save</button>
        </form>
    </div>


    <div class="table" style="margin-top: 100px; margin-bottom:100px;">
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
            </tr>
            @foreach ($data as $ck)
                <tr>
                    <td>{{ $ck->id }}</td>
                    <td>{{ $ck->name }}</td>
                    <td>{{ $ck->email }}</td>
                    <td>{{ $ck->password }}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
