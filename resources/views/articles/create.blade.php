@extends('app')

@section('content')
<h2>Nuevo articulo</h2>

{!! Form::open(['url'=>'articles']) !!}

<div class="form-group">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title') !!}
</div>
<div class="form-group">
  {!! Form::label('body', 'Body:') !!}
  {!! Form::textarea('body') !!}
</div>

<div class="form-group">
{!! Form::submit('Add article') !!}
</div>
{!! Form::close() !!}

@stop