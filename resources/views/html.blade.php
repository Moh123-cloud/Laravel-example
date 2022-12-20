<h1>User Login</h1>

{{-- @if ($errors->any())
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach    
@endif --}}
    

<form action="html" method="POST">
    @csrf 
    <input type="text" name="username" placeholder="Username"><br>
    <span style="color:red";>@error('username'){{ $message }}@enderror</span><br>
    <input type="password" name="password" placeholder="Password"><br>
    <span style="color:red";>@error('password'){{ $message }}@enderror</span><br>
    <button type="submit">Submit</button><br><br>
</form>