@php
    $users="saurbh";
    $dataset=['array','object']
@endphp
<script>
    // var data= @json($users);
    var data={{Js::from($users)}}
    console.log(data);
    var dataset={{Js::from($dataset)}}
    dataset.forEach(element => {
        console.log(element);
    });
</script>