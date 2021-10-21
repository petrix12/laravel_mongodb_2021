@extends('dashboard.master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Creación</th>
                <th>Actualización</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->_id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->created_at->format('d-m-Y') }}</td>
                    <td>{{ $book->updated_at->format('d-m-Y') }}</td>
                    <td>{{ $book->age }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ route('book.edit', $book->_id) }}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="{{ route('book.destroy', $book->_id) }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
@endsection