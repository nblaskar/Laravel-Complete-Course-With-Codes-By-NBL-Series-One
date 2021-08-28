<h1>Users Ligin</h1>
<form action="users" method="POST">
    {{-- it provides a token key for validating this form --}}
    @csrf
    {{-- process-1 --}}
    {{$errors}} <br>
    {{-- Process-2 --}}
    @if($errors->any())
    @foreach ($errors->all() as $err)
        <li>{{$err}}</li>
        
    @endforeach
    @endif
    {{-- process-3 --}}
    <input type="text" name="username" placeholder="Enter User Id"><br>
    <span style="color: red">
        @error('username')
        {{$message}}            
        @enderror
    </span> <br>
    <input type="password" name="userpassword" placeholder="Enter User Password"><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span> <br>
    <button type="submit">Login</button>
</form>