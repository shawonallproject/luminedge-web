<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{URL::to('admin/')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                    <span class="title">Dashboard</span>
{{--                    <span class="arrow">--}}
{{--                                    <i class="arrow-icon"></i>--}}
{{--                                </span>--}}
                </a>
{{--                <ul class="dropdown-menu">--}}
{{--                    <li class="active">--}}
{{--                        <a href="index.html">Default</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="index-crm.html">CRM</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="index-e-commerce.html">E-commerce</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="index-projects.html">Projects</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-appstore"></i>
                                </span>
                    <span class="title">User Management</span>
                    <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{URL::to('admin/list')}}">List</a>
                    </li>
                    <li>
                        <a href="{{URL::to('admin/create')}}">Add New</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
									<i class="anticon anticon-build"></i>
								</span>
                    <span class="title">Career Management</span>
                    <span class="arrow">
									<i class="arrow-icon"></i>
								</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{URL::to('admin/career/list')}}">List</a>
                    </li>
                    <li>
                        <a href="{{URL::to('admin/career/create')}}">Add New</a>
                    </li>

                </ul>
            </li>
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="dropdown-toggle" href="javascript:void(0);">--}}
{{--                                <span class="icon-holder">--}}
{{--                                    <i class="anticon anticon-hdd"></i>--}}
{{--                                </span>--}}
{{--                    <span class="title">Client Information</span>--}}
{{--                    <span class="arrow">--}}
{{--                                    <i class="arrow-icon"></i>--}}
{{--                                </span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li>--}}
{{--                        <a href="accordion.html">List</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="dropdown-toggle" href="javascript:void(0);">--}}
{{--                                <span class="icon-holder">--}}
{{--                                    <i class="anticon anticon-form"></i>--}}
{{--                                </span>--}}
{{--                    <span class="title">Book Appointment</span>--}}
{{--                    <span class="arrow">--}}
{{--                                    <i class="arrow-icon"></i>--}}
{{--                                </span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li>--}}
{{--                        <a href="form-elements.html">List</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-table"></i>
                                </span>
                    <span class="title">News</span>
                    <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{URL::to('admin/news/list')}}">List</a>
                    </li>
                    <li>
                        <a href="{{URL::to('admin/news/create')}}">Add New</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-table"></i>
                                </span>
                    <span class="title">Content</span>
                    <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{URL::to('admin/content/about')}}">About</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->
