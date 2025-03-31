{{-- bladetemplate includeing Subviews --}}
{{-- <h1>dnskd</h1> --}}
@php
    // $items=['apple','cars','iphone'];
    // $items=["phone"=>"iphone","car"=>"hondacity"]
    $items=[];

@endphp
@include('pages.header',['name'=>$items])
<h1>this is container</h1>

{{-- @include('pages.footer') --}}
{{-- @include('pages.footer') --}}
{{-- again show --}}
{{-- @include('pages.new'); this show error  --}}
{{-- for this use include if --}}
{{-- @includeIf('pages.fot'); --}}

{{-- for checking some condition for inclue then use this --}}

{{-- @includeWhen(conditionvalue(t/f),'viewfile',['status'=>'hello'] ) --}}
{{-- for opposite inclueunless --}}
@includeWhen(true,'pages.footer',['status'=>'success'] );
