<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    /*** OPERACIONES PRINCIPALES PARA UN CRUD ***/


    /*** CREAR (C) ***/

    /* Book::create([
        'title' => 'Cualquier cosa',
        'description' => 'Soluciones++'
    ]); */


    /*** BUSCAR (R) ***/

    // Obtener todos los documentos
    /* $books = Book::all(); */

    // Obtner todos los documentos con la clave title = 'Cualquier cosa'
    /* $books = Book::where('title','Cualquier cosa')->get(); */

    // Obtner todos los documentos con la clave description no null
    /* $books = Book::where('title','Cualquier cosa')->whereNotNull('description')->get(); */

    // Obtner todos los documentos con la clave description null
    /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->get(); */

    // Obtner la consulta SQL
    /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->toSql(); */

    // Obtener el docomento con _id = 61701f2e59670000c5004b45
    /* $books = Book::find('61701f2e59670000c5004b45'); */


    /*** ACTUALIZAR (U) ***/

    // Actualizar el docomento con _id = 61701f2e59670000c5004b45
    /* $books = Book::find('61701f2e59670000c5004b45');
    $books->update([
        'title' => 'Cualquier cosa 2',
        'description' => 'Soluciones++ 3',
        'age' => 2021
    ]); */

    /*** ELIMINAR (D) ***/

    // Eliminar el docomento con _id = 61701f2e59670000c5004b45
    /* $books = Book::find('61701f2e59670000c5004b45');
    $books->delete(); */


    /*** OTRAS OPERACIONES ***/
    // Actualizar un documento y luego incrementar el valor de una clave
    /* $books = Book::find('6170265f59670000c5004b48');
    $books->update([
        'title' => 'Cualquier cosa 2',
        'description' => 'Soluciones++ 3',
        'age' => 2021
    ]);
    $books = Book::find('6170265f59670000c5004b48')->increment('age');
    dd(Book::find('6170265f59670000c5004b48')); */

    /* dd($books); */

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
