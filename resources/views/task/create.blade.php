<x-layout>
  <div class="">
    <div class="font-bold text-xl mb-2 space-x-2">
      <span>Task #{{$task->id}}</span>
      <span class="font-medium">{{$task->task_title}}</span>
    </div>
    <form action="{{route('task.store')}}" method="post">
      @csrf
      <input type="text" name="task_title" placeholder="Title here">
      <textarea name="task_description" rows="10" placeholder="Input your description here">
        </textarea>
      <div class="buttons">
        <button type="submit">
          Add
        </button>
        <a href="{{route('task.index')}}">
          Cancel</a>

      </div>
    </form>
  </div>
</x-layout>
