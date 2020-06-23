@extends('layouts.app')

@section('pageTitle', '- Add a new Story')

@section('content')
<div class="container">
    <form action="{{ route('story.save') }}" method="POST">
        <div class="row">
            <div class="col-sm-8">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title">
                    <div class="invalid-feedback">{{$errors->first('title')}}</div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="8" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" placeholder="Enter a description to the story"></textarea>
                    <div class="invalid-feedback">{{$errors->first('description')}}</div>
                </div>

                <div class="form-group float-right">
                    <a href="{{route('story.list')}}" class="btn btn-danger">Back</a>
                    <button class="btn btn-success">Save</button>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Story type</label>
                    <select name="story_type" class="form-control {{$errors->has('story_type') ? 'is-invalid' : ''}}">
                        <option value="bug" selected>Bug</option>
                        <option value="enhancement">Enhancement</option>
                        <option value="feature">Feature</option>
                    </select>
                    <div class="invalid-feedback">{{$errors->first('story_type')}}</div>
                </div>

                <div class="form-group">
                    <label>Assign to users</label>
                    <select name="users[]" class="form-control {{$errors->has('users') ? 'is-invalid' : ''}}" multiple>
                        <option>Select user</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">{{$errors->first('users')}}</div>
                </div>

                <div class="form-group">
                    <label>Due date</label>
                    <input type="date" class="form-control {{$errors->has('due_date') ? 'is-invalid' : ''}}" placeholder="Enter due date" name="due_date">
                    <div class="invalid-feedback">{{$errors->first('due_date')}}</div>
                </div>
            </div>
        </div>
    </form>
</div>
