<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Edit {{ $role->name }} role</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <div class="mt-6 py-2">
                <h2 class="text-black text-2xl font-medium mb-4">Permissions</h2>
                @if($role->permissions->count())
                    @foreach($ole->permissions as $role_permission)
                        {{ $role_permission->name }}
                    @endforeach
                @else
                    <h5>This role currently has no permissions</h5>
                @endif
            </div>
            <hr>
            <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                @csrf
                @method("PATCH")
                <div class="row">
                    <div class="w-full">
                        <label>Name</label>
                        <input type="text" name="name" id="name" value="{{ $role->name }}">
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <h2 class="text-black text-2xl font-medium mb-4">Assign Permissions</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="w-full">
                        <ul class="list-none grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-2">
                            @foreach($permissions as $permission)
                                <li>
                                    <label for="">
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                            {{ $role->permissions->pluck('id')->contains($permission->id) ? 'checked' : '' }}> {{ $permission->name }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="darkSlateBtn">Update</button>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
