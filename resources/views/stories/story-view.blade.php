@extends('layouts.app')

@section('pageTitle', "#{$story->id} {$story->title}")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>#{{$story->id}} {{$story->title}}</h3>
            <p>{{$story->description}}</p>
        </div>
    </div>
</div>
@endsection
