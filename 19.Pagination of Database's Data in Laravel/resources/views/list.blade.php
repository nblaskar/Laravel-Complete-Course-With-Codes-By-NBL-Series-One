<h1>Members List</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    {{-- Print the incoming Database data in row wise as below --}}
    @foreach ($listData as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
    </tr>
        
    @endforeach
    
</table>

{{-- Enable Pagination options  --}}
<span>
    {{$listData->links()}}
</span>
<style>
    /* it is used for removing unwanted arrows Comes by Default*/
    .w-5{
        display: none;
    }
</style>