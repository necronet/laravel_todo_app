@extends('app')

@section('content')
<h1>About</h1>
<div class="title">About {{$first}} {{$last}}</div>


@if(count($people))

<div>Mis amigos</div>
<ul>
@foreach($people as $person) 
<li>{{ $person }}</li>

@endforeach
</ul>

@endif

@stop