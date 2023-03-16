<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <div class="flex flex-col md:flex-row gap-6 w-full">
                <div class="w-full md:w-1/2">
                    <h1>Roles</h1>
                </div>
                <div class="w-full md:w-1/2 flex justify-end">
                    <a href="{{ route('admin.roles.create') }}" class="darkSlateBtn">Add new</a>
                </div>
            </div>

        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <table class="dataTablesTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($role as $r)
                    <tr>
                        <td>{{ $r->name }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.roles.show', $r->id) }}" class="viewBtn"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.roles.edit', $r->id) }}" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('admin.roles.destroy', $r->id) }}" class="delete">
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
