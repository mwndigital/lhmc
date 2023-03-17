<div class="topBar">
    <div class="container-fluid">
        <a href="" class="navbar-brand">
            <x-application-logo class="block h-10 w-auto fill-current text-white" />
        </a>
        <div class="rightItems">
            <ul class="hidden lg:block">
                <li>
                    <a href="">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-clipboard-list"></i></a>
                </li>
                <li>
                    <a href="{{ route('admin.settings.index') }}"><i class="fa-solid fa-wrench"></i></a>
                </li>
                <li>
                    <x-dropdown align="right" width="48" class="w-auto">
                        <x-slot name="trigger">
                            <button class="dropBtn flex-row">
                                <i class="fa-solid fa-circle-user"></i>

                            </button>
                        </x-slot>
                        <x-slot name="content" class='bg-slate-800'>
                            <x-dropdown-link href="">My Notes</x-dropdown-link>
                            <x-dropdown-link href="">My Todos</x-dropdown-link>
                            <x-dropdown-link href="">Activity Log</x-dropdown-link>
                            <x-dropdown-link href="">My Account</x-dropdown-link>
                            <x-dropdown-link href="">{{ Auth::user()->email }}</x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }} <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </li>
            </ul>
        </div>
    </div>
</div>