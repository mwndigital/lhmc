<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Create Role</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="w-full">
                        <label>Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="darkSlateBtn">Create</button>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
