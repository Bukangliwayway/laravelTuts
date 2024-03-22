<x-layout>
  <div class="centered-content">
    <a href="{{ route("task.show", $task) }}">
      <div class="rounded-3xl p-px bg-gradient-to-b from-blue-300 to-pink-300 dark:from-blue-800 dark:to-purple-800 w-1/4">
        <div class="rounded-[calc(1.5rem-1px)] p-10 bg-white dark:bg-gray-800 h-full">
          <h2 class="text-gray-700 dark:text-gray-300">
            Task#{{$task->id}}
          </h2>

          <p class="text-gray-700 dark:text-gray-300"> {{ $task->task_description }}
          </p>
          <div class="mt-8 flex gap-4 ">
            <a href="{{ route("task.edit", $task) }}" class="ml-auto text-lg font-medium text-gray-700 dark:text-white"> <button class="group relative flex items-center justify-center h-8 w-20 overflow-hidden rounded-lg bg-white text-lg shadow">
                <div class="absolute inset-0 w-1 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full" />
                <span class="relative text-black group-hover:text-white">Edit</span>
              </button></a>
            <a href="{{ route("task.destroy", $task) }}" class="text-lg font-medium text-gray-700 dark:text-white"> <button class="group relative flex items-center justify-center h-8 w-20 overflow-hidden rounded-lg bg-white text-lg shadow">
                <div class="absolute inset-0 w-1 bg-red-700 transition-all duration-[250ms] ease-out group-hover:w-full" />
                <span class="relative text-black group-hover:text-white">Delete</span>
              </button></a>
          </div>
        </div>
      </div>
    </a>
  </div>


</x-layout>
