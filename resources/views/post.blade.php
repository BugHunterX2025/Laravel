@extends('layout.masterlayout')
@section('content')
<h1>This Post Page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi nam eius inventore sunt, in aliquid blanditiis fugiat ducimus ab repellendus vel quis laboriosam alias est sint expedita nulla, voluptas odio dolor eos repudiandae iusto iure doloribus! Error sit recusandae optio omnis harum doloremque illum, explicabo quia nisi iure sequi aliquid qui?</p>
@endsection

@section('title')
    Post
@endsection
@section('sidebar')
@parent
<p>This is the sidebar</p>
    
@endsection
@push('script')
<script src="./ex.js"></script>
    
@endpush