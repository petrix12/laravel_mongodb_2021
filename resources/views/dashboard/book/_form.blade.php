@csrf
<label for="title">Título</label>
<input name="title" id="title" type="text" class="form-control" value="{{ old('title', $book->title ) }}">

<label for="age">Año</label>
<input name="age" id="age" type="numeric" class="form-control" value="{{ old('age', $book->age ) }}">

<label for="category_id">Categoría</label>
<select name="category_id" id="category_id" class="form-control">
    @foreach ($categories as $title => $id)
        <option {{ $book->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<label for="description">Descripción</label>
<textarea name="description" id="description" class="form-control" cols="30" rows="10">
    {{ old('description', $book->description ) }}
</textarea>