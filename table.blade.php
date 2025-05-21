@extends('layout.template')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thread>

        <tbody>
            @foreach ($points as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->description }}</td>
                <td>
                    @if ($p->image)
                    <img src="{{ asset('storage/images/' . $p->image) }}"
                    alt="" width="200" title="{{ $p->image }}">
                    @else
                    No Image
                    @endif
                </td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection
