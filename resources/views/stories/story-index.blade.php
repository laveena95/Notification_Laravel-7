@extends('layouts.app')

@section('pageTitle', '- Stories on my project')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Stories
                    <span class="float-right"><a href="{{ route('story.add') }}">Add story</a></span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Created At</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($stories as $story)
                            <tr>
                                <td>
                                    <a href="{{route('story.view', $story->id)}}" class="story-title">
                                        <strong>#{{$story->id}} {{$story->title}}</strong>
                                    </a>
                                    <br>
                                    Created by <a href="#">{{$story->creator->name}}</a>
                                    <span> Due date {{$story->due_date}}</span>
                                </td>
                                <td>{{$story->story_type}}</td>
                                <td>{{$story->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$stories->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
