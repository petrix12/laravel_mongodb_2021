<?php

namespace App\Http\Controllers\Dashboard;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveBook;
use App\Tag;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->testhasOne();
        // $this->testhasOneEmbedded();
        // $this->testHasManyFK();
        // $this->testHasManyEmbedded();
        // $this->testBelongsManyFK();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }

    private function testBelongsManyFK(){
        // tagID 61cb5bece634000070003af4 61cb5bc9e634000070003af3
        $book = Book::find('6182f9bf9a5a00006b004f5b');
        $tag = Tag::find("61cb5bece634000070003af4");

        dd($book->tags());

        $book->tags()->attach(
            $tag
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        $categories = Category::pluck('_id', 'title');
        return view('dashboard.book.create', compact('book', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveBook $request)
    {
        Book::create($request->validated());
        return back()->with('status', 'Libro creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::pluck('_id', 'title');
        return view('dashboard.book.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(SaveBook $request, Book $book)
    {
        $book->update($request->validated());
        return back()->with('status', 'Libro ' . $book->title . ' actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('status', 'Libro ' . $book->title . ' eliminado correctamente');
    }

    // Métodos para hacer pruebas con relación hasOne
    // Tipo clave foránea
    private function testhasOneFK(){
        // _id book: 618284129a5a00006b004f58
        $book = Book::find('618284129a5a00006b004f58');
        $category = Category::first();
        $book->category()->save($category);

        dd($book->category);
    }

    // Tipo documento embebido
    private function testhasOneEmbedded(){
        // _id book: 618284129a5a00006b004f58
        $book = Book::find('618284129a5a00006b004f58');
        $category = Category::first()->ToArray();

        $book->category = $category;
        $book->save();

        dd($book->category);
    }

    // Métodos para hacer pruebas con relación hasMany
    // Tipo clave foránea
    private function testHasManyFK(){
        // _id book: 6174a0164fa7d063b431b722
        $book = Book::find('6174a0164fa7d063b431b722');
        $category = Category::first();
        // dd($book->category);
        // $book->category()->save($category); /* NO VA A FUNCIONAR */

        $category->books()->save($book);
        dd($category->books);
    }
    
    // Tipo documento embebido
    private function testHasManyEmbedded(){
        // _id book: 6182ecdd9a5a00006b004f5a
        $book = Book::find('6182ecdd9a5a00006b004f5a');
        $category = Category::first()->ToArray();

        $book->push('categories', $category);
        $book->save();

        dd($book->categories);
    }
}
