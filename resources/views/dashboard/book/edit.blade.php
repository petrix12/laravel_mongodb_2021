@extends('dashboard.master')
@section('content')
    <div class="mt-3 card">
        <div class="card-header">
            Editar libro: {{ $book->title }}
        </div>
        <div class="card-body">
            @include('dashboard.partials.errors-form')
            <form action="{{ route('book.update', $book->_id) }}" method="post">
                @method('PUT')
                @include('dashboard.book._form')
                <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
            </form>
        </div>
    </div>
@endsection