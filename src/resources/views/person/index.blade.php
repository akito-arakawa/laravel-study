<table>
    <tr>
        <th>Name</th>
        <th>Mail</th>
        <th>Age</th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    @endforeach
</table>