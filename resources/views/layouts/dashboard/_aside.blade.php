<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.welcome') }}" class="brand-link">
        <span class="brand-text font-weight-light">Task</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item"><a class="nav-link {{ Route::is('dashboard.welcome') ? 'active' : ''  }}"
                                        href="{{ route('dashboard.welcome') }}"><i class="nav-icon fa fa-home"></i>
                        <p> @lang('site.dashboard')</p></a></li>
                
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.users.index') ||  Route::is('dashboard.users.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.users.index') ||  Route::is('dashboard.users.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                @lang('site.users')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.index') }}"
                                       class="nav-link {{ Route::is('dashboard.users.index') ? 'active' : ''  }}">
                                        <i class="fa fa-users nav-icon"></i>
                                        <p>@lang('site.users')</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.create') }}"
                                       class="nav-link {{ Route::is('dashboard.users.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                        </ul>
                    </li>

                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.providers.index') ||  Route::is('dashboard.providers.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.providers.index') ||  Route::is('dashboard.providers.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-providers"></i>
                            <p>
                                @lang('site.providers')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.providers.index') }}"
                                       class="nav-link {{ Route::is('dashboard.providers.index') ? 'active' : ''  }}">
                                        <i class="fa fa-providers nav-icon"></i>
                                        <p>@lang('site.providers')</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.providers.create') }}"
                                       class="nav-link {{ Route::is('dashboard.providers.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                        </ul>
                    </li>
            </ul>
        </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</aside>
