{{-- Including Header --}}
@include('header')

<h1>Users Page</h1>
{{-- Include a view block --}}
@include('inner')


{{-- Use of PHP inside JavaScript --}}
{{-- @foreach ($users as $emp)
    <h3>{{$emp}}</h3>
@endforeach --}}
@csrf
{{-- -->It is very useful when we are sending thge request to the laravel. Because it generates a token and laravel
 identified that the request is authenticated to prevent the cross site request.--}}
<script>
    var data=@JSON($users);
    // Print all array data to consloe
    console.log(data);
</script>

