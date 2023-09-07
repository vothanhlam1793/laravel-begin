@extends('layouts.app')
@section('title', 'Task Management')

@section('content')
    <h1>Welcome to Your App</h1>
    <p>This is an example page using Bootstrap.</p>
    <!-- Your content here -->


    <h1>Task List</h1>
    <table
        class="table table-bordered table-striped"
    >
        <tr>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Slug</th>
            <th>Act</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->slug }}</td>
                <td><a href="tasks/{{$task->id}}/edit"
                    class="btn btn-warning"
                    >Sửa</a>
                    <a href="tlug/{{$task->slug}}"
                        class="btn btn-success"
                        >Xem thêm</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection



@section('sidebar')
    @include("parts.sidebar")
@endsection

@section('header')
    @include("parts.header")
@endsection