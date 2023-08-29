@extends('layouts.app')
@section('title', 'Task Management')

@section('content')
    <h1>Welcome to Your App</h1>
    <p>This is an example page using Bootstrap.</p>
    <!-- Your content here -->
@endsection



@section('sidebar')
    @include("parts.sidebar")
@endsection

@section('header')
    @include("parts.header")
@endsection