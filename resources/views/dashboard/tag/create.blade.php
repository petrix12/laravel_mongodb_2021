@extends('dashboard.master')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Crear tag
        </div>
        <div class="card-body">
            @include('dashboard.partials.errors-form')
            <form action="{{ route('tag.store') }}" method="post">
                @include('dashboard.tag._form')
                <input type="submit" value="Enviar" class="mt-3 btn btn-success">
            </form>
        </div>
    </div>
@endsection