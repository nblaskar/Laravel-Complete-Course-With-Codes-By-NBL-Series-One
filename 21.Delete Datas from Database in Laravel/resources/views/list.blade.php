<h1>Member List Data</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Delete Operation</th>
    </tr>
    {{-- Print the database data in tabler form --}}
    @foreach ($memberData as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        {{-- pass the delete path with current row's id --}}
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
    </tr>
        
    @endforeach
</table>