<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Content
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.posts.index')}}">Blog Posts</a></li>
      <!-- <li>
        <a class="has-menu" style="">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('manage.roles.index')}}">Roles</a></li>
          <li><a href="{{route('manage.permissions.index')}}">Permissions</a></li>
        </ul>
      </li> -->
    </ul>
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.users.index')}}">Manage Users</a></li>
      <li>
        <a class="has-menu" style="">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('manage.roles.index')}}">Roles</a></li>
          <li><a href="{{route('manage.permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
