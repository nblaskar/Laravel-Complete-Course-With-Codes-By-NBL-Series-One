<h1>Update Member Data</h1>
 {{-- view the incomming rows data for update --}}
<form action="/update" method="POST">
    @csrf
    <input readonly type="text" name="id" value={{$edata['id']}}><br> {{-- id hiddenly pass is mandatory --}}
    <input type="text" name="name" value={{$edata['name']}}><br>
    <input type="email" name="email" value={{$edata['email']}}><br>
    <button type="submit">Update</button>
</form>

