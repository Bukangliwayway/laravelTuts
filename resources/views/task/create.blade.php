<x-layout>
  <div class="max-w-xl px-12 py-8 overflow-hidden shadow-md mx-auto mt-8 flex gap-2 flex-col">
    <div class="font-bold text-xl mb-2 space-x-2">
      <span>Create Task</span>
    </div>
    <form action="{{route('task.store')}}" method="post" class="flex gap-2 flex-col">
      @csrf
      <div class="w-full flex gap-2 items-center justify-end">
        <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 rounded-full border border-blue-500 hover:border-transparent">
          Create
        </button>
        <a href="{{route('task.index')}}">
          <button class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white py-1 px-4 rounded-full border border-gray-500 hover:border-transparent">
            Cancel
          </button>
        </a>
      </div>
      <div class="w-full flex gap-4 flex-col">
        <input type="text" name="task_title" placeholder="Title here" ">
        <textarea name=" task_description" rows="10" placeholder="Input your description here"></textarea>
      </div>
    </form>
  </div>
</x-layout>
