<?php

namespace App\Http\Controllers\Dashboard;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveBook;
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
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        return view('dashboard.book.create', compact('book'));
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
        return view('dashboard.book.edit', compact('book'));
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

    // Otros métodos

    // Método para hacer pruebas con relación hasOne
    private function testhasOne(){
        // _id book: 618284129a5a00006b004f58
        $book = Book::find('618284129a5a00006b004f58');
        $category = Category::first();
        $book->category()->save($category);

        dd($book->category);
    }
}
