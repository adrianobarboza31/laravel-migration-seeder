@extends('layouts.app')
@section('content')

<div class="d-flex wrap" >
    @foreach ($trains as $key=>$train)
    <div class="ab-card azzscuro">
        
        <p>
            <strong>Azienda:</strong>{{$train['azienda']}}
        <br>
        <strong>Stazione di Partenza:</strong>
        {{$train['stazione_di_partenza']}}
        <br>
        <strong>Stazione di Arrivo:</strong>
        {{$train['stazione_di_arrivo']}}
        <br>
        <strong>Orario di Partenza:</strong>
        {{$train['orario_di_partenza']}}
        <br>
        <strong>Orario di Arrivo:</strong>
        {{$train['orario_di_arrivo']}}
        <br>
        <strong>Codice Treno:</strong>
        {{$train['codice_treno']}}
        <br>
        <strong>Numero Carrozze:</strong>
        {{$train['numero_carrozze']}}
        </p>
    </div>
         
    @endforeach
   
</div>
@endsection