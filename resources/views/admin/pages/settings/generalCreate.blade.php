<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Create new general setting</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.settings.general-settings.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="w-full md:w-1/2">
                        <label>Name</label>
                        <input type="text" name="key" id="key" value="{{ old('key') }}" required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label>Value</label>
                        <input type="text" name="value" id="value" value="{{ old('value') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="w-full">
                        <button class="darkSlateBtn" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
