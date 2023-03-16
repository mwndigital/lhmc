<x-admin-layout>
    <section class="pageHero">
        <div class="inner">
            <h1>Activity Log</h1>
        </div>
    </section>
    <section class="pageMain">
        <div class="inner">
            <div class="flex justify-end">
                <form method="post" action="{{ route('admin.activity-log.clear-log') }}">
                    @csrf
                    <button type="submit" class="confirm-log-clear-btn ml-auto block">Clear Log</button>
                </form>
            </div>
            <table class="dataTablesTable">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Date & time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activity as $a)
                    <tr>
                        <td>{{ $a->description }}</td>
                        <td>{{ date('jS M Y | H:i', strtotime($a->created_at)) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
