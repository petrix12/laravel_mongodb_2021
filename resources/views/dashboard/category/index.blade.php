@extends('dashboard.master')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Lista de categorías MongoDB
        </div>
        <div class="card-body my-2">
            <a href="{{ route('category.create') }}" class="btn btn-success text-white">
                <i class="fa fa-plus"></i> Crear
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Creación</th>
                        <th>Actualización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->_id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->created_at->format('d-m-Y') }}</td>
                            <td>{{ $category->updated_at->format('d-m-Y') }}</td>
                            <td>
                                <a class="btn btn-sm btn-success text-white" href="{{ route('category.edit', $category->_id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a 
                                    data-id="{{ $category->_id }}"
                                    data-title="{{ $category->title }}"
                                    class="btn btn-sm btn-danger text-white" 
                                    href="#" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteModal"
                                >
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar <span></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Seguro que quieres eliminar el registro seleccionado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="formDelete" data-action="{{ route('category.destroy', 0) }}" action="{{ route('category.destroy', 0) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- script Modal --}}
    <script>
    var deleteModal = document.getElementById('deleteModal')
    deleteModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-id')
        var title = button.getAttribute('data-title')

        // Form
        var action = document.getElementById('formDelete').getAttribute('data-action')
        action = action.slice(0,-1)
        document.getElementById('formDelete').setAttribute('action', action + id)
        
        // Update the modal's content.
        var modalTitle = deleteModal.querySelector('.modal-title span')

        modalTitle.textContent = title
    })
    </script>
@endsection