<h1>
User Deatils</h1>
@foreach ($data as $id => $user )
<h2>
    Name : {{$user->name}}
</h2>
<h2>
    Email : {{$user->email}}
</h2>
    
@endforeach