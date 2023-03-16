<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <div class="flex flex-col md:flex-row gap-6 w-full">
                <div class="w-full md:w:1/2">
                    <h1>Permissions</h1>
                </div>
                <div class="w-full md:w:1/2 flex justify-end">
                    <a href="{{ route('admin.permissions.create') }}" class="darkSlateBtn">Add new</a>
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
                @foreach($permission as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td class="actions">
                            <a href="" class="viewBtn"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.permissions.edit', $p->id) }}" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('admin.permissions.destroy', $p->id) }}" class="delete">
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
