<h1>User Login</h1>

<form action="httprequest" method="POST">
    @csrf
    {{ method_field('DELETE') }}
    <input type="text" name="user" placeholder="Enter Name"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>