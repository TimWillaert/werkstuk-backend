<?php

namespace App\Http\Controllers;

use App\Spreker;
use Illuminate\Http\Request;

class SprekerController extends Controller
{

    public function getIndex(){
        $sprekers = Spreker::orderBy('name', 'asc')->get();
        return view('content.sprekers', ['sprekers' => $sprekers]);
    }

    public function getEdit($id){
        $spreker = Spreker::where('id', $id)->first();
        return view('content.editspreker', ['spreker' => $spreker]);
    }

    public function postUpdate(Request $request){
        $spreker = Spreker::find($request->input('id'));

        $spreker->name = $request->input('name');
        $spreker->description = $request->input('description');
        $spreker->website = $request->input('website');

        $spreker->save();

        return redirect()->action('SprekerController@getIndex');
    }

    public function getDelete($id){
         $spreker = Spreker::find($id);
         $spreker->delete();

         return redirect()->action('SprekerController@getIndex');
    }

    public function getCreate(){
        return view('content.createspreker');
    }

    public function postCreate(Request $request){
        $spreker = new Spreker([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'website' => $request->input('website')
        ]);

        $spreker->save();

        return redirect()->action('SprekerController@getIndex');
    }

}
