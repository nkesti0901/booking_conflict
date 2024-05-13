<x-layouts.main title="{{ __('Index') }}">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('Time') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Cell Number') }}</th>
                    <th scope="col">{{ __('Comment') }}</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($conflicts as $conflict)
                <tr>
                    <th scope="row"><i class="bi bi-stopwatch"></i> {{ $conflict->start_time . ' - ' . $conflict->end_time }}</th>
                    <td>{{ $conflict->patient->name }}</td>
                    <td>{{ $conflict->patient->cell_number }}</td>
                    <td><i class="bi bi-pencil"></i> {{ $conflict->comment }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.main>
