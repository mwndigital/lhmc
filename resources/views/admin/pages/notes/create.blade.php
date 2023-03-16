<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Create note</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.notes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="w-full">
                        <label>Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <label>Content</label>
                        <textarea name="content" class="tinyEditor" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <button type="submit" class="darkSlateBtn">
                            Save note
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
