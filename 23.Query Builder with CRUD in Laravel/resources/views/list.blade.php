<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    {{-- Print the database data in tabler form --}}
    @foreach ($tableData as $item)
    <tr>
        {{-- Can not use as Arrary because incomming data is object --}}
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>       
    </tr>
        
    @endforeach
</table>