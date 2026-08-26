<div class="navbar bg-base-100 shadow-sm px-6">
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
  <div class="navbar-end gap-2">
    @guest
        <a href="/register" class="btn btn-ghost">Register</a>
        <a href="/login" class="btn btn-primary">Log In</a>
    @endguest
    @auth
        <form action="/logout" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-ghost">Log Out</button>
        </form>
    @endauth
  </div>
</div>
