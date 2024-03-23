<x-layout>
  <div class="max-w-xl px-12 py-8 overflow-hidden shadow-md mx-auto mt-8">
    <div class="flex justify-between mb-4">
      <div class="font-bold text-xl mb-2 space-x-2 w-1/2">
        <span>Task #{{$task->id}}</span>
        <span class="font-medium">{{$task->task_title}}</span>
      </div>
      <div class="w-1/2 flex gap-2 items-center justify-end">
        <a href="{{route('task.edit', $task)}}">
          <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 rounded-full border border-blue-500 hover:border-transparent">
            Edit
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
    </div>
    <p class="text-gray-700 text-base">
      {{$task->task_description}}
    </p>
  </div>


</x-layout>
