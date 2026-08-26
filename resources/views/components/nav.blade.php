<div class="navbar bg-base-100 shadow-sm">
  <div class="navbar-start">
    <a href="/" class="btn btn-ghost text-xl">Idea</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="/ideas">Home</a></li>
      <li><a href="/ideas/create">New Idea</a></li>
      @can('view-admin')
        <li><a href="/admin">Admin</a></li>
      @endcan
    </ul>
  </div>
  <div class="navbar-end">
    @guest
    <a href="/register" class="btn">Register</a>
    <a href="/login" class="btn btn-secondary">Log In</a>
      @can('view-admin')
        <li><a href="/admin">Admin</a></li>
      @endcan
    @endguest
    @auth
        <form action="/logout" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn">Log Out</button>
        </form>
    @endauth
  </div>
</div>
