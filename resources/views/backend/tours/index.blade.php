@extends('frontend.layouts.app')
@section('title', app_name() . ' | Tours')
@section('content')

<div class="panel-body">
    <li style="list-style-type:disc">
      <b>{{ $tours->name }}</b><br>
            <p class="teaser">
               {{  str_limit($tours->description, 100) }} {{-- Limit teaser to 100 characters --}}
            </p>
        </a>
    </li>
</div>
@endsection
