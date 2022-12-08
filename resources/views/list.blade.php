<h1>hello</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>

    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{ $data['id'] }}</td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['email'] }}</td>

    </tr>

    @endforeach


</table>
