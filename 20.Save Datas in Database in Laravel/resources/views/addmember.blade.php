<h1>Add Members Data</h1>

<form action="addmember" method="POST">
@csrf
<input type="text" name="id"><br>
<input type="text" name="name"><br>
<input type="text" name="email"><br>
<button type="submit">Save</button>
</form>