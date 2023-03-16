<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Users</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <table class="dataTablesTable">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email Address</td>
                        <td>Role</td>
                        <td class="actions">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{ $u->id  }}</td>
                            <td>{{ $u->first_name }}</td>
                            <td>{{ $u->last_name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                @foreach($u->roles as $role)
                                    <span>{{ $role->name }}</span>,
                                @endforeach
                            </td>
                            <td class="actions">
                                <a href="{{ route('admin.users.show', $u->id) }}" class="viewBtn"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('admin.users.edit', $u->id) }}" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form method="POST" action="{{ route("admin.users.destroy", $u->id) }}" class="delete">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="confirm-delete-btn"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
