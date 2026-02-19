<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function list(Request $request) {

        $books = Book::query()
        ->when(
            $request->has('titulo'),
            fn ($query) => $query->where('titulo', 'like', '%' . $request->input('titulo') . '%'))
        ->when(
            $request->has('ISBN'),
            fn ($query) => $query->where('ISBN', 'like', '%' . $request->input('email') . '%'))
        -> when (
            $request->has('status'),
            fn ($query) => $query->where('disponible', '=', $request->input('status'))
        )
        ->get();  

        return BookResource::collection($books);
    }
}
