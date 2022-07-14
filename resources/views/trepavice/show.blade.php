@extends('layouts.app')
@section('content')
<a href="/trepavice/public/kozmeticar" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o izabranom kozemticaru:</h1>
    <div> Studio: {{$r->studio}} </div>
    <div> Ime: {{$r->ime}} </div>
    <div> Prezime: {{$r->prezime}} </div>
    <div> Adresa: {{$r->adresa}} </div>
    <div> Cena: {{$r->cena}} </div>
    <div> Telefon: {{$r->telefon}} </div>
    <div> Brend: {{$r->brend}} </div>
    <a href="/trepavice/public/kozmeticar/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\KozmeticarController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
