<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboard.index')}}"><img src="{{ asset('assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Sumamo</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                <div class="image"><a href="#"><img src="{{ ($user->profile && $user->profile->photo)? $user->profile->photo->getUrl('thumb') : asset('assets/images/avatar_male.png') }}" alt="User Photo"></a></div>
                    <div class="detail">
                        <h6>{{auth()->user()->name}}</h6>
                        <small class="badge badge-danger">{{auth()->user()->roles->first()->title}}</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(2) === 'profile' ? 'active open' : null }}"><a href="{{route('dashboard.profile')}}"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>

            @can('user_management_access')


            <li class="{{ Request::segment(2) === 'blog' ? 'active open' : null }}">
                <a href="#Blog" class="menu-toggle"><i class="zmdi zmdi-blogger"></i> <span>Blog</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(3) === 'posts' ? 'active' : null }}"><a href="{{route('posts.index')}}">Posts</a></li>
                    <li class="{{ Request::segment(3) === 'categories' ? 'active' : null }}"><a href="{{route('categories.index')}}">Categories</a></li>
                    <li class="{{ Request::segment(3) === 'tags' ? 'active' : null }}"><a href="{{route('tags.index')}}">Tags</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'admin' ? 'active open' : null }}">
                <a href="#Admin" class="menu-toggle"><i class="zmdi zmdi-accounts"></i> <span>Admin Control</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}"><a href="{{route('admin.users.index')}}">Users</a></li>
                    <li class="{{ Request::segment(2) === 'roles' ? 'active' : null }}"><a href="{{route('admin.roles.index')}}">Roles</a></li>
                    <li class="{{ Request::segment(2) === 'permissions' ? 'active' : null }}"><a href="{{route('admin.permissions.index')}}">Permission</a></li>
                </ul>
            </li>


            @endcan


        </ul>
    </div>
</aside>
