<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>{{ $role->name }} Role</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <h2 class="text-black text-2xl font-medium mb-4">Role's permissions</h2>
            <ul class="list-none columns-1 md:columns-2 lg:columns-4 block w-full">
                @foreach($rolePermissions as $p)
                    <li>{{ $p->name }}</li>
                @endforeach
            </ul>
            <hr>
        </div>
    </section>
</x-admin-layout>
