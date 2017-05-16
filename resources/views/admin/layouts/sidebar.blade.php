<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> @lang('blog.sidebar.Dashboard')</a></li>
            <li><a><i class="fa fa-edit"></i> @lang('blog.sidebar.Category Manage') <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.tags.index') }}">@lang('blog.sidebar.Category List')</a></li>
                    <li><a href="{{ route('admin.tags.create') }}">@lang('blog.sidebar.Create Category')</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> @lang('blog.sidebar.Post Manage') <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.posts.index') }}">@lang('blog.sidebar.Post List')</a></li>
                    <li><a href="{{ route('admin.posts.create') }}">@lang('blog.sidebar.Create Post')</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-user"></i>  @lang('blog.sidebar.User Manage') <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.users.index') }}"> @lang('blog.sidebar.User List')</a></li>
                    <li><a href="{{ route('admin.users.create') }}"> @lang('blog.sidebar.Create User')</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> @lang('blog.sidebar.Link Manage') <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.links.index') }}"> @lang('blog.sidebar.Link Manage') </a></li>
                    <li><a href="{{ route('admin.links.create') }}"> @lang('blog.sidebar.Create Link') </a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="menu_section">
        <h3>@lang('blog.sidebar.System')</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> @lang('blog.sidebar.SystemInfo') </a></li>
            <li><a><i class="fa fa-windows"></i> @lang('blog.sidebar.SystemInfo') </a></li>

            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>

</div>