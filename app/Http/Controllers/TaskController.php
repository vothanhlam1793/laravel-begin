<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task', compact('tasks'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function showBySlug($slug)
    {
        $task = Task::where('slug', $slug)->first();
        if (!$task) {
            abort(404); // Task không tồn tại, hiển thị trang 404
        }

        return view('tasks.show', compact('task'));
    }

    public function store(Request $request)
    {
        // echo dd($request);
        $task = new Task;
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();
        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = Task::find($id);
        
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
