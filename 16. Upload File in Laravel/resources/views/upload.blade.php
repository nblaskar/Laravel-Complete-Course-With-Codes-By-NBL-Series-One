<h1>Upload A File</h1>
{{-- Use of enctype is mandatory for file upload form --}}
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile"> <br> <br>
    <button type="submit">Upload</button>
</form>

