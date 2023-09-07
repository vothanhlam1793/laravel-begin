<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Task Name:</label>
        <input type="text" name="name" id="name" value="{{ $task->name }}" required>
        <br>

        <label for="description">Task Description:</label>
        <textarea name="description" id="description" rows="4">{{ $task->description }}</textarea>
        <br>

        <button type="submit">Update Task</button>
    </form>
</body>
</html>
