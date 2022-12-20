{{-- Including header --}}
@include('header');

<h1>Blade Page </h1>
@include('inner');

{{-- using if statements --}}
{{-- @if($user=='Moh')
    <h3>Hi {{ $user }}</h3>
    @elseif($user=='Jawjii')
    <h3>Hi {{ $user }}</h3>
@else
    <h3>Unknown User</h3>
@endif

{{-- using for loop --}}
@for($i=0; $i<10; $i++)
    <h4>{{ $i }}</h4>
@endfor

{{-- using for loop --}}
@foreach ($users as $user)
   <h1>{{ $user }}</h1> 
@endforeach

<script>
    var data=@json($users);
    console.warn(data[0])
</script>



