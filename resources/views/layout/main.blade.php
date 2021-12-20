<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Laravel 8</title>
</head>
<body>
  <div>
    <a href="/" style="margin-right: 1rem">Home</a>
    <a href="/about">About</a>
  </div>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>