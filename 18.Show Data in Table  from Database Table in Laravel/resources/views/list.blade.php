<h1>Members List</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    {{-- Print the incoming Database data in row wise as below --}}
    @foreach ($listData as $item)
    <tr>
        <td>{{$item['roll']}}</td>
        <td>{{$item['name']}}</td>
    </tr>
        
    @endforeach
    
</table>