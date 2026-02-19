<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanRequest;
use App\Models\Book;
use App\Models\Loan;

class LoanController extends Controller
{
    public function store(LoanRequest $request) {
        $data = $request->validated();
        $book = Book::find($data['libro']);

        if ($book->copias_disponibles === 0 || $book->Disponible === 0) {
            return response()->json(['error'=>'Sin existencias'], 422);
        }

        $restantes = $book->copias_disponibles - 1;
        $book->copias_disponibles = $restantes;
        if ($restantes === 0) {
            $book->Disponible = 0;
        }

        $book->save();

        $loan = new Loan;
        $loan->name = $data['name'];
        $loan->fecha_hora_prestamo = $data['fecha/hora'];
        $loan->book_id = $data['libro'];
        $loan->created_at = now();
        $loan->updated_at = now();
        $loan->save();

        return $loan;

    }
}
