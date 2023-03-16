<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Notes</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <table class="dataTablesTable">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Published Date</th>
                    <th>Updated Date</th>
                    <th class="actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $n)
                    <tr>
                        <td>{{ $n->title }}</td>
                        <td>{!! $n->content !!}</td>
                        <td>{{ date('jS M Y', strtotime($n->created_at)) }}</td>
                        <td>{{ date('jS M Y', strtotime($n->updated_at)) }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.notes.show', $n->id) }}" class="viewBtn"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.notes.edit', $n->id) }}" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route("admin.notes.destroy", $n->id) }}" class="delete">
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
