<h1>Users Page</h1>
{{-- Can Write any operation  --}}
{{-- <h1>Some data - {{10+20}}</h1>
{{10+34}} --}}

{{-- Pass data from contoller to blade template and can use php function on them --}}
{{-- <h1>{{count($users)}}</h1>
<h1>{{$users[1]}}</h1> --}}

{{-- To Use the if else Condition --}}
{{-- @if($users=='Firdaus')
    <h2>Hi {{$users}}</h2>
@elseif($users=='Ramjan')
    <h2>Hello {{$users}}</h2>
@else
    <h3>Unknown User</h3>
@endif --}}

{{-- To Use the For Loop --}}
{{-- @for($i=0; $i<10; $i++)
  <h3>{{$i}}</h3>  
@endfor --}}

{{-- To Use the For Each Loop --}}
{{-- @foreach ($users as $emp)
    <h1>{{$emp}}</h1>
@endforeach --}}

{{-- To Use the For Each Loop --}}
@foreach ($users as $emp)
    <h1>{{$loop->count}}</h1>
@endforeach

