<div class="row">
    <div class="col-10">
        <select id="tag_id" class="form-control">
            @foreach ($tags as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <button class="btn btn-success" id="tag_save">Enviar</button>
    </div>
</div>

@foreach ($book->tags as $tag)
    <button id="{{ $tag->_id }}" class="btn btn-danger btn-sm mt-2 ml-1"><i class="fa fa-trash"></i>{{ $tag->title }}</button>
@endforeach