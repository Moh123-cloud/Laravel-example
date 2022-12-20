<h1>Add Member</h1>

<form action="save" method="post">
    @csrf
    <input type="text" name="name" placeholder="First Name"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="address" placeholder="Address"><br><br>
    <button>Add Member</button>
</form>