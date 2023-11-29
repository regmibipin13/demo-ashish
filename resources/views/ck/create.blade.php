@extends('layout')
@section('content')
    <div class="form p-5">
        <form action="{{ route('ck.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name"><br /><br />
            <input type="text" name="email" placeholder="Email"><br /><br />
            <input type="text" name="password" placeholder="Password"><br /><br />
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
