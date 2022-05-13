@extends('layouts.app')
@section('title')
    {{ "home" }}
@endsection

@section('content')

<h1>{{ $heading }}</h1>

@unless (count($listings)==0)
@foreach ($listings as $listing )
<h1 style="padding: 50px">{{ $listing['id'] }}</h1>
<p style="justify-content: center; margin:50px">{{ $listing['description'] }}</p>
    
@endforeach

@else
<p>No Listings Found!!</p>

@endunless

@endsection