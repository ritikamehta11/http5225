<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>

<head>
  <title>@yield('title', 'My Application')</title>
  <!-- Add Bootstrap CSS here if you want -->
</head>

<body>
  <nav>
    <!-- Navigation items here -->
    @if (Auth::check())
    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
      @csrf
      <button type="submit" class="btn btn-primary">Logout</button>
    </form>
  @else
  <!-- Login/Registration Links -->
  <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
  <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
@endif
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>

</html>