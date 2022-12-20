<h1>User List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>Name</td>
        <td>Profile Photo</td>
    </tr>

    @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['first_name'] }}</td>
            <td>{{ $item['avatar'] }}</td>
        </tr>
    @endforeach
    
</table>