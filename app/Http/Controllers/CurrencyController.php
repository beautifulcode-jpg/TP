<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function list(){
        $collection = Currency::all();
        return view('currency.list',compact('collection'));
    }
    public function create(){
        return view('currency.form');
    }
    public function edit(Currency $record){
        dd($record);
        return view('currency.form',compact('record'));
    }
    public function store(){
        // store
        $collection = Currency::all();
        dd($collection);
        return view('currency.list',compact('collection'));
    }
    public function delete(Currency $record){
        // delete
        $collection = Currency::all();
        dd($collection);
        return view('currency.list',compact('collection'));
    }
}
