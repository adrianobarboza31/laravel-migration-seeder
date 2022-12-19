@extends('layouts.app')
@section('content')
<h2>Treni</h2>
<div ">
    @foreach ($trains as $key=>$train)
    <div>
        
        <p>
            <span>{{$key}}</span>
            {{$train['azienda']}}</p>
    </div>
         
    @endforeach
   
</div>
@endsection