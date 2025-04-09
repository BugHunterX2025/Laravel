<h1>this is inner join</h1>
@foreach ($data as $set)
<h3>
    {{$set->student_id}} ||
    {{$set->name}} ||
    {{$set->email}} ||
    {{$set->city_name}} 
</h3>
</h3>
    
@endforeach