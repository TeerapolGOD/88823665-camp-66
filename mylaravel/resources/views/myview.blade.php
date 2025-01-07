<h1> My View </h1>
<?php echo $value_id; ?>
{{ $value_id; }}  {{$myinput}}


<form action="{{url('/mycontroller')}}"
    method="post">
    @csrf
    <input type="text" name="myinput">
    <botton type="summit">
        summit
    </botton>    
</form>
<?php for ($i=0; $i < 10; $i++) { ?>
    <h1>{{$i}}</h1>
<?php }?>