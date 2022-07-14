@extends('layouts.app')
@section('content')
    <h1> Podaci o kozmeticarima: </h1>
     @if(count($r)>0)
    @foreach ($r as $r1)
        <div class="well">
            <h3> <a href = "/trepavice/public/kozmeticar/{{$r1->id}}">Prikazi kozameticara: {{$r1->ime}} {{$r1->prezime}}</a> </h3>
</div>
    @endforeach
    @endif
@endsection
