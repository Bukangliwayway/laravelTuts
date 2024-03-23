<x-layout>
  <div class="max-w-xl px-12 py-8 overflow-hidden shadow-md mx-auto mt-8 flex gap-2 flex-col">
    <div class="font-bold text-xl mb-2 space-x-2">
      <span>Task #{{$task->id}}</span>
      <span class="font-medium">{{$task->task_title}}</span>
    </div>
    <form action="{{route('task.update', $task)}}" method="POST">
      @csrf
      @method('put')
      <div class="w-full flex gap-2 items-center justify-end">
        <a href="{{route('task.update', $task)}}">
          <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-1 px-4 rounded-full border border-green-500 hover:border-transparent">
            Save
          </button>
        </a>
        <form action="{{route('task.destroy', $task)}}" method="post">
          @csrf
          @method('delete')
          <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-1 px-4 rounded-full border border-red-500 hover:border-transparent">
            Delete
          </button>
        </form>
      </div>
      <div class="w-full flex gap-4 flex-col">
        <input type="text" name="task_title" placeholder="Title here" value="{{$task->task_title}}">
        <textarea name="task_description" rows="10" placeholder="Input your description here">
        {{$task->task_description}}
        </textarea>
      </div>
  </div>


</x-layout>
