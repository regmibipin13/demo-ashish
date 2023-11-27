@extends('layout')
@section('content')
    @if ($errors->any())
        {{ $errors->first() }}
    @endif
    <form action="{{ route('form.submit') }}" method="GET">
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Submit</button>
    </form>



    @php
        $products = [
            1 => 'Shoe',
            2 => 'Brush',
            3 => 'Paper',
        ];
    @endphp

    <div class="products">
        <ul>
            @foreach ($products as $key => $value)
                <li>
                    <a href="{{ route('products', $key) }}">{{ $value }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
