<h1>List Member</h1>


{{-- //show list from database --}}
{{-- <table border='1'>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
    </tr>
    
    @foreach ($models as $model)
        <tr>
            <td>{{ $model['id'] }}</td>
            <td>{{ $model['name'] }}</td>
            <td>{{ $model['email'] }}</td>
            <td>{{ $model['address'] }}</td>
        </tr>
    @endforeach
</table> --}}

{{-- Pagenation --}}
<table border='1'>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>
    
    @foreach ($models as $model)
        <tr>
            <td>{{ $model['id'] }}</td>
            <td>{{ $model['name'] }}</td>
            <td>{{ $model['email'] }}</td>
            <td>{{ $model['address'] }}</td>
            <td><a href={{ "delete/" .$model['id'] }}>Delete</a></td>
        </tr>
    @endforeach

</table>



{{-- Used in pagination --}}
{{-- 
<span>
    {{ $models->links() }}
</span>

<style>
    .w-5{
        display: none;
    }
</style> --}}