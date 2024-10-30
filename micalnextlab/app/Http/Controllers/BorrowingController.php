<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Constants\Table;


class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('borrowings.index', ['borrowings' => Borrowing::paginate(10)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrowings.create', ['books' => Book::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        Table::tb2_2 => 'required',
        Table::tb2_3 => 'required',
        Table::tb2_4 => 'required',
        Table::tb2_5 => 'required',
        Table::tb2_6 => 'required',
        Table::tb2_7 => 'required',
        Table::tb2_8 => 'required'
       ]);

         Borrowing::create($validatedData);

       return redirect()->route('borrowings.index')->with('success', 'Borrowing Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        $book = $borrowing->book;
        return view('borrowings.show', compact('borrowing','book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrowing $borrowing)
    {
        $books = Book::all();
        return view('borrowings.edit', compact('borrowing','books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrowing $borrowing)
    {
        $validatedData = $request->validate([
            Table::tb2_2 => 'required',
            Table::tb2_3 => 'required',
            Table::tb2_4 => 'required',
            Table::tb2_5 => 'required',
            Table::tb2_6 => 'required',
            Table::tb2_7 => 'required',
            Table::tb2_8 => 'required'
           ]);

           $borrowing->update($validatedData);
           return redirect()->route('borrowings.index')->with('success', 'Borrowing Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
        return redirect()->route('borrowings.index')->with('success', 'Borrowing Deleted Successfully');
    }
}
