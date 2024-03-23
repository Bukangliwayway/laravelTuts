<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ $title ?? "Laravel" }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<div class="flex bg-gray-800 text-white top-0 py-3 flex-wrap justify-around bg-silver items-center">
  <h1 class="text-lg uppercase font-bold">LaraTask</h1>
  <ul class="flex gap-[40px] text-m">
    <a href="{{ route('home') }}">
      <li class="text-sm lowercase">Home</li>
    </a>
    <a href="{{ route("task.index") }}">
      <li class="text-sm lowercase">Tasks</li>
    </a>
    <a href="{{ route("task.create") }}">
      <li class="text-sm lowercase">Create</li>
    </a>
  </ul>
</div>

<body class="font-sans antialiased">
  @session('message')
  <div class="bg-{{session('status_color')}}-100 border-l-4 border-{{session('status_color')}}-500 text-{{session('status_color')}}-700 p-4" role="alert">
    <p class="font-bold">{{session('status')}}</p>
    <p>{{session('message')}}</p>
  </div>

  @endsession
  {{ $slot }}
</body>
@isset($footer)
<footer>
  {{ $footer }}
</footer>
@endisset
</html>
