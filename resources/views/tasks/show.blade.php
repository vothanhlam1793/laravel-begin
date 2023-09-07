<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>

    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
