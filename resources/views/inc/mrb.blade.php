
@extends('layouts.app')

@section('content')
<h1>Meeting Room Booking</h1> 
{!! Form::open(['url' => 'reserve/submit']) !!}
    <div class="form-group">
        {{FORM::label('name', 'Name')}}
        {{FORM::text ('name', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}   {{-- name, value, associative array of opttions for additional attribute --}}
    </div>
    <div class="form-group">
        {{FORM::label('agenda', 'Agenda')}}
        {{FORM::textarea ('agenda', '', ['class'=>'form-control','placeholder'=>'Enter Agenda'])}}
        
    </div>
    <div class="form-group">
        {{FORM::label('time', 'Time')}}
        {{FORM::time('time', '',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{FORM::label('date', 'Date')}}
        {{FORM::date('date', '',['class'=>'form-control'])}}
    </div>
    <div>
        {{FORM::submit('Reserve', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection