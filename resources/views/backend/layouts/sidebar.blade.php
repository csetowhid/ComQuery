<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('backend/images/fevicon-white.png')}}">
        <span class="hidden xl:block text-white text-lg ml-3"><span class="font-medium">ComQuery</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @can('Dashboard Show')
        <li>
            <a href="{{route('dashboard')}}" class="side-menu {{ (request()->is('dashboard')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @endcan
        @can('Role Management')
        <li>
            <a href="#" class="side-menu {{ (request()->is(['permission*','roles*','users*'])) ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Role Management <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="{{ (request()->is(['permission*','roles*','users*'])) ? 'side-menu__sub-open' : '' }}">
                @can('Role List')
                <li>
                    <a href="{{route('roles.index')}}" class="side-menu {{ (request()->is('roles*')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Roles </div>
                    </a>
                </li>
                @endcan
                @can('Permission List')
                <li>
                    <a href="{{route('permission.index')}}" class="side-menu {{ (request()->is('permission*')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Permissions </div>
                    </a>
                </li>
                @endcan
                @can('User List')
                <li>
                    <a href="{{route('users.index')}}" class="side-menu {{ (request()->is('users*')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Users </div>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        <li class="side-nav__devider my-6"></li>

        <li>
            <a href="#" class="side-menu {{ (request()->is('quiz*')) ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                <div class="side-menu__title"> Quiz <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="{{ (request()->is('quiz*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{route('quiz.create')}}" class="side-menu {{ (request()->is('quiz/create')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Create </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('quiz.index')}}" class="side-menu {{ (request()->is('quiz')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> List </div>
                    </a>
                </li>
            </ul>
        </li>

            <li>
                <a href="#" class="side-menu {{ (request()->is('questions*')) ? 'side-menu--active' : '' }} ">
                    <div class="side-menu__icon"> <i data-feather="pen-tool"></i> </div>
                    <div class="side-menu__title"> Question <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="{{ (request()->is('questions*')) ? 'side-menu__sub-open' : '' }}">
                    <li>
                        <a href="{{route('questions.create')}}" class="side-menu {{ (request()->is('questions/create')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Create </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('questions.index')}}" class="side-menu {{ (request()->is('questions')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> List </div>
                        </a>
                    </li>
                </ul>
            </li>
        <li>
            <a href="side-menu-inbox.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title"> Inbox </div>
            </a>
        </li>
        <li>
            <a href="side-menu-file-manager.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-point-of-sale.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Point of Sale </div>
            </a>
        </li>


    </ul>
</nav>
