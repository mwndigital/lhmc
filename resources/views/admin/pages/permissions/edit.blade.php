<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Edit {{ $permission->name }}</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="w-full">
                        <label>Name</label>
                        <input type="text" name="name" id="name" value="{{ $permission->name }}">
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="darkSlateBtn">Update</button>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
