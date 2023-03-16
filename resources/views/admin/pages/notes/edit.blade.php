<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Edit {{ $note->title }}</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.notes.update', $note) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="w-full">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}">
                        @error('title') <span class="text-red font-semiBold text-base my-1">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <label>content</label>
                        <textarea name="content" class='tinyEditor' id="content" cols="30" rows="10" class='tinymceEditor'>{{ old('content', $note->content) }}</textarea>
                        @error('content') <span class='text-red font-semibold text-[16px] my-1'>{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <button type="submit" class="darkSlateBtn">
                            Update Note
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
