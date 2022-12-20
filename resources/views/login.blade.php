<h1>User Login</h1>
<form action="session" method="post">
    @csrf
    <input type="text" name="Username" placeholder="Enter Username"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submi"t>Login</button>
</form>