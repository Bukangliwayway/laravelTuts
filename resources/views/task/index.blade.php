<x-layout>
  <div>
    <div class="tasks flex flex-wrap gap-4 justify-center p-12">
      @foreach ($tasks as $task)
      <div class="w-3/12 rounded overflow-hidden shadow-md">

        <a href="{{ route("task.show", $task) }}">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 space-x-2">
              <span>Task #{{$task->id}}</span>
              <span class="font-medium">{{Str::words($task->task_title, 3)}}</span>
            </div>
            <p class="text-gray-700 text-base">
              {{Str::words($task->task_description, 20)}}
            </p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    {{$tasks->links()}}
  </div>
</x-layout>
