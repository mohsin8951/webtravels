@extends('backend.layouts.app')
@section('title', app_name() . ' | Tours')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Create New Post</h1>
        <hr>
        {{-- @include ('errors.list') --}}

        {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'backend.tours.store')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('duration', 'Duration') }}
            {{ Form::text('duration', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('image', 'image') }}
            {{ Form::file('image', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('description', 'description') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('price', 'price') }}
            {{ Form::text('price', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Create Tour', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>
@endsection
