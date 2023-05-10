@extends('basic')
@section('content')
<h1>Contact Page</h1>


   {!! Form::open(['url' => 'contact']) !!}
   {!!Form::text('name')!!}
   {!!Form::text('surname')!!}
   {!!Form::text('message')!!}
   {!!Form::submit('Send')!!}
   {!! Form::close() !!}
   
@endsection