<h1>Users Ligin</h1>
<form action="users" method="POST">
    {{-- it provides a token key for validating this form --}}
    @csrf
    <input type="text" name="username" placeholder="Enter User Id"><br><br>
    <input type="password" name="userpassword" placeholder="Enter User Password"><br><br>
    <button type="submit">Login</button>
</form>