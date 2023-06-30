<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Redirect;

class QuoteController extends Controller
{
    public function create_quote()
    {
        return view('create_quote');
    }

    public function store_quote(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'quote' => 'required',
            'author' => 'required',
            'user_id' => 'required'
        ]);

        Quote::create([
            'title' => $request->title,
            'quote' => $request->quote,
            'author' => $request->author,
            'user_id' => $request->user_id
        ]);

        return Redirect::route('index_quote');
    }

    public function index_quote()
    {
        $quotes = Quote::all();
        return view('index_quotes', compact('quotes'));
    }

    public function show_quote(Quote $quote)
    {
        return view('show_quote', compact('quote'));
    }

    public function edit_quote(Quote $quote)
    {
        return view('edit_quote', compact('quote'));
    }

    public function update_quote(Quote $quote, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'quote' => 'required',
            'author' => 'required',
            'user_id' => 'required'
        ]);

        $quote->update([
            'title' => $request->title,
            'quote' => $request->quote,
            'author' => $request->author,
            'user_id' => $request->user_id
        ]);

        return Redirect::route('show_quote', $quote);
    }

    public function delete_quote(Quote $quote)
    {
        $quote->delete();
        return Redirect::route('index_quote');
    }

}
