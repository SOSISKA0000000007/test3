<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Product;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Получаем все продукты из базы данных
        return view('home', compact('books')); // Возвращаем представление со списком продуктов
    }
    function show($id)
    {
        $books = Book::findOrFail($id);
        return view('user', compact('books'));
    }
}
