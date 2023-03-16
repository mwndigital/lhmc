<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>{{ $note->title }}</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <div class="block w-full mb-10">
                {!! $note->content !!}
            </div>
            <hr>
            <div class="flex flex-row gap-6 py-6">
                <a href="{{ route('admin.notes.edit', $note) }}" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <form method="POST" action="{{ route("admin.notes.destroy", $note->id) }}" class="delete">
                    @csrf
                    @method("delete")
                    <button type="submit" class="confirm-delete-btn"><i class="fa-solid fa-trash"></i></button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
