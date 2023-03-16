<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <div class="flex flex-col md:flex-row gap-6 w-full">
                <div class="w-full md:w-1/2">
                    <h1>General Settings</h1>
                </div>
                <div class="w-full md:w-1/2 flex justify-end">
                    <a href="{{ route('admin.settings.general-settings.create') }}" class="darkSlateBtn">Add new</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <form action="{{ route('admin.settings.general-settings.update') }}" method="POST">
                @csrf
                @method("PUT")
                @foreach ($settings as $setting)
                    <div class="row">
                        <div class="w-full">
                            <label>{{ str_replace('_', ' ', $setting->key) }}</label>
                            <input type="text" name="settings[{{ $setting->key }}]" value="{{ $setting->value }}">
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="w-full">
                        <button class="darkSlateBtn" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
