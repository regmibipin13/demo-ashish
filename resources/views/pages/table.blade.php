<table border="1">
    @foreach ($data as $d)
        <tr>
            <td>{{ $d['name'] }}</td>
            <td>{{ $d['email'] }}</td>
            <td>{{ $d['password'] }}</td>
        </tr>
    @endforeach
</table>
