<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - @yield('title')</title>
  <link rel="stylesheet" href="/public/style.css">
</head>
<body>
  <nav>
    <ul>
      @include('layouts.menu')
    </ul>
  </nav>
  <h1>
    @yield('title')
  </h1>
  <main>
    @section('content')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab officia dolor nemo dolores! Necessitatibus tempore, ea, dolores repellat dicta consectetur enim cum non id in, expedita sapiente unde repudiandae.</p>
    @show
  </main>
  @include('layouts.footer')
</body>
</html>