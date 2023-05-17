@extends('basic')
@section('content')
<h1>Info text Page</h1>
many informations


   {!!Form::open(['url' => 'page']) !!}
   {!!Form::text('title')!!}
   {!!Form::text('description')!!}
   {!!Form::textarea('maintext')!!}
   {!!Form::submit('Send')!!}
   {!! Form::close() !!}
   
@endsection