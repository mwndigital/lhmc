<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>{{ $user->first_name }} {{ $user->last_name }}'s details</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <h4 class="text-slate-700 text-3xl font-medium mb-2 mt-2 text-left">User details</h4>
            <table>
                <tbody>
                    <tr>
                        <td><strong>First Name:</strong></td>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Last Name:</strong></td>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Email Address:</strong>
                        </td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h4 class="text-slate-700 text-3xl font-medium mb-2 mt-2 text-left">Roles</h4>
            <div class="flex flex-col md:flex-row gap-6">
                @foreach($user->roles as $role)
                    <span>{{ $role->name }}</span>
                @endforeach
            </div>
            <hr>
            <h4 class="text-slate-700 text-3xl font-medium mb-2 mt-2 text-left">Permissions</h4>
            <div class="flex flex col md:flex-row gap-6">
                @foreach($user->permissions as $permission)
                    <span>{{ $permission->name }}</span>
                @endforeach
            </div>
        </div>
    </section>
</x-admin-layout>
