<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::query()->orderBy("created_at", "desc")->paginate(10);
        // dd($tasks);
        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(['task_description' => ['required', 'nullable'], 'task_title' => ['required', 'string']]);
        $data['user_id'] = 1;
        $task = Task::create($data);
        return to_route('task.show', $task)
            ->with('status', 'success')
            ->with('status_color', 'green')
            ->with('message', 'Task saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

        return view('task.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate(['task_description' => ['required', 'nullable'], 'task_title' => ['required', 'string']]);
        $task->update($data);
        return to_route('task.show', $task)
            ->with('status', 'success')
            ->with('status_color', 'green')
            ->with('message', 'Task edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('task.index')
            ->with('status', 'success')
            ->with('status_color', 'green')
            ->with('message', 'Task Deleted successfully');
    }
}
