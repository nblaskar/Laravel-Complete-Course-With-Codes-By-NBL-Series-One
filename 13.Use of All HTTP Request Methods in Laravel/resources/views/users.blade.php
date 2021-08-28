<h1>User Log in</h1>
<form action="users" method="POST">
    {{-- {{method_field('PUT')}} --}}
    @csrf
    <input type="text" name="user"> <br> <br>
    <input type="password" name="password"> <br> <br>
    <button type="submit">Login</button>
</form>

