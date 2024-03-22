<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite("resources/css/app.css")
  <title>{{ $title ?? "Laravel" }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <style id="dynamic-styles"></style>
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
  {{ $slot }}
</body>
@isset($footer)
<footer>
  {{ $footer }}
</footer>
@endisset
</html>

<script>
  function adjustContentHeight() {
    const navbar = document.querySelector('.main-nav'); // Replace 'nav' with the appropriate selector for your navbar
    const navbarHeight = navbar ? navbar.offsetHeight : 0; // Get the navbar height, or set it to 0 if the navbar is not found

    const dynamicStyles = document.getElementById('dynamic-styles');
    dynamicStyles.innerHTML = `.centered-content { height: calc(100vh - ${navbarHeight}px); }`;
    console.log(dynamicStyles.innerHTML);

  }

  // Call the function when the page loads
  window.addEventListener('DOMContentLoaded', adjustContentHeight);

  // Call the function when the window is resized (in case the navbar height changes dynamically)
  window.addEventListener('resize', adjustContentHeight);

</script>
