<?php

namespace App\Http\Controllers;

use App\Spreker;
use Illuminate\Http\Request;

class SprekerController extends Controller
{

    public function getIndex(){
        $speakers = Spreker::orderBy('name', 'asc')->get();
        return view('content.speakersIndex', ['speakers' => $speakers]);
    }

    public function getEdit($id){
        $speakers = Spreker::where('id', $id)->first();
        return view('content.speakersEdit', ['speaker' => $speakers]);
    }

    public function postUpdate(Request $request){
        $speaker = Spreker::find($request->input('id'));

        $speaker->name = $request->input('name');
        $speaker->description = $request->input('description');
        $speaker->website = $request->input('website');

        $speaker->save();

        return redirect()->action('SprekerController@getIndex');
    }

    public function getDelete($id){
         $speaker = Spreker::find($id);
         $speaker->delete();

         return redirect()->action('SprekerController@getIndex');
    }

    public function getCreate(){
        return view('content.speakersCreate');
    }

    public function postCreate(Request $request){
        $speaker = new Spreker([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'website' => $request->input('website')
        ]);

        $speaker->save();

        return redirect()->action('SprekerController@getIndex');
    }

}
