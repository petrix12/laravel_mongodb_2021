@extends('dashboard.master')
@section('content')
    <div class="mt-3 card">
        <div class="card-header">
            Crear libro
        </div>
        <div class="card-body">
            <form action="{{ route('book.store') }}" method="post">
                @include('dashboard.book._form')
                <input type="submit" value="Enviar" class="mt-3 btn btn-success">
            </form>
        </div>
    </div>
@endsection