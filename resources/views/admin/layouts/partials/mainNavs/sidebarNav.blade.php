<nav :class="{'block': open, 'hidden': !open}" class="">
    <a class="{{ request()->is('admin') ? 'bg-gray-600' : '' }} sideMenuItem" href="{{ route('admin.dashboard') }}">Dashboard</a>
    <div @click.away="open = false" class="dropdownMenu" x-data="{ open: false }">
        <button @click="open = !open" class="{{ request()->is('') ? 'bg-gray-700' : '' }}">
            <span>Pages</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700 text-white">
                <a class="{{ request()->is('') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="">View All Pages</a>
                <a class="{{ request()->is('') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="">Add new Page</a>

            </div>
        </div>
    </div>
    <div @click.away="open = false" class="dropdownMenu" x-data="{ open: false }">
        <button @click="open = !open" class="{{ request()->is('') ? 'bg-gray-700' : '' }}">
            <span>Notes</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700 text-white">
                <a class="{{ request()->is('admin/notes') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="{{ route('admin.notes.index') }}">View All Notes</a>
                <a class="{{ request()->is('admin/notes/create') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="{{ route('admin.notes.create') }}">Add new Note</a>

            </div>
        </div>
    </div>
    <div @click.away="open = false" class="dropdownMenu" x-data="{ open: false }">
        <button @click="open = !open" class="{{ request()->is('') ? 'bg-gray-700' : '' }}">
            <span>Users</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700 text-white">
                <a class="{{ request()->is('admin/users') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="{{ route('admin.users.index') }}">View All Users</a>
                <a class="{{ request()->is('') ? 'bg-gray-700' : '' }} dropdownMenuItem" href="">Add new Page</a>

            </div>
        </div>
    </div>
</nav>
