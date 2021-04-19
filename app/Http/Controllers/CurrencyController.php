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
    public function showForm(){
        return view('currency.form');
    }
    public function create(Request $request){
        $currency = new Currency;
        $currency->CURRENCY_ID = request('CURRENCY_ID');
        $currency->CURRENCY_TITLE = request('CURRENCY_TITLE');
        $currency->CURRENCY_PICTURE = base64_encode(file_get_contents($request->file('CURRENCY_PICTURE')));
        $currency->save();
        $collection = Currency::all();
        return view('currency.list',compact('collection'));
    }
    public function store(Request $request, Currency $currency){
        $currency->CURRENCY_ID = request('CURRENCY_ID');
        $currency->CURRENCY_TITLE = request('CURRENCY_TITLE');
        $currency->CURRENCY_PICTURE = base64_encode(file_get_contents($request->file('CURRENCY_PICTURE')));
        $currency->save();
        $collection = Currency::all();
        return view('currency.list',compact('collection'));
    }
    public function edit(Currency $currency){
        return view('currency.form',compact('currency'));
    }
    public function update(Currency $record){
        //update
        $collection = Currency::all();
        return view('currency.list',compact('collection'));
    }
    
    public function delete(Currency $currency){
        $currency->delete();
        $collection = Currency::all();
        return view('currency.list',compact('collection'));
    }
}
