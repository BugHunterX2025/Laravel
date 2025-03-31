<H1>HOME :: FIRST PAGE</H1>
{{5+2}}
<br>
{{"hello world"}}

<br>
{!! "<h1>this is heading</h1>" !!}
<br>
{{-- {!! "<script>alert('hi this is my code')</script>" !!} --}}

@php
    // $user ="saurabh";
    $name=["saurabh","archi"];
    $username='saurabhsinngh';
@endphp

<ul>
@foreach ($name as $names )
@if ($loop->first)
<li>{{ $loop->count}}{{ $names }} ss</li>

@else
<li>{{ $loop->count}}{{ $names }}</li>
@endforelse

@endforeach
</ul>
@{{ $user }}


{{-- foreach properties --}}
{{-- $loop->index=0
$loop->iteration==start 1
$loop->remaing --}}
{{-- $loop->first,last,even,odd,depth,parent --}}

