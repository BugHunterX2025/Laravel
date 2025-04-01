{{-- <h1>{{ $user }} lives in {{!empty($city) ? $city :'No'
    }}/h1> --}}
{{-- {!! $script !!} --}}

@foreach ($user as $id => $data)
<h1>{{$id}}||{{ $data['name'] }} || {{$data['phone']}} || <a href="{{ route('view.user',$id)}}">show</a></h1>    
@endforeach