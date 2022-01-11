@extends('layout.main')
@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employee as $item) {{-- contoh looping --}}
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['age'] }} Tahun</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection