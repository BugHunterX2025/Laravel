<h1>this is header page</h1>
{{-- <h2>this is rec form my main page {{$name[0]}}</h2> --}}
{{-- @foreach ($name as $key => $value )
<p>{{$key}}- {{$value}}</p>
    
@endforeach --}}
@forelse ($name as $key => $value )
<p>{{$key}}- {{$value}}</p>
   
@empty
<h1>no value in this array </h1>
@endforelse