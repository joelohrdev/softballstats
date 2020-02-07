<div>
    @foreach ($players as $p)
        <tr>
            <td>{{ $p->first_name }} {{ $p->last_name }}</td>
            <td>{{ $p->number }}</td>
            <td>{{ $p->stats()->pluck('balls')->sum() }}</td>
            <td>{{ $p->stats()->pluck('strikes')->sum() }}</td>
            <td>{{ number_format($p->stats()->where('outcome', '!=', 'Strikeout')->where('outcome', '!=', 'Walk')->where('outcome', '!=', 'Hit by Pitch')->count() / $p->stats()->pluck('outcome')->count(), 3) }}</td>
        </tr>
    @endforeach
</div>
