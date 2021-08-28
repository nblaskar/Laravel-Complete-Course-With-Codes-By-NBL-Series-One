<h1>User Log in</h1>

{{-- Flesh Session Data Printing as message --}}
@if (session('user'))
<h2 style="color: green">{{session('user')}} user data Submited</h2>
    
@endif
<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user"> <br> <br>
    <input type="password" name="password"> <br> <br>
    <button type="submit">Login</button>
</form>

