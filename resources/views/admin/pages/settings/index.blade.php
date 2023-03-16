<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Settings</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="box">
                    <a href="{{ route('admin.settings.general-settings') }}">
                        <h4>General Settings</h4>
                    </a>
                </div>
                <div class="box">
                    <a href="{{ route('admin.users.index') }}">
                        <h4>Users</h4>
                    </a>
                </div>
                <div class="box">
                    <a href="{{ route('admin.roles.index') }}">
                        <h4>Roles</h4>
                    </a>
                </div>
                <div class="box">
                    <a href="{{ route('admin.permissions.index') }}">
                        <h4>Permissions</h4>
                    </a>
                </div>
                @role('super admin|admin')
                    <div class="box">
                        <a href="{{ route('admin.activity-log.index') }}">
                            <h4>Activity Log</h4>
                        </a>
                    </div>
                @endrole
            </div>
        </div>
    </section>
</x-admin-layout>
