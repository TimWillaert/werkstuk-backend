<?php

namespace App\Http\Controllers;

use App\Sessie;
use App\Spreker;
use Illuminate\Http\Request;

class SessieController extends Controller
{
    public function getIndex(){
        $sessions = Sessie::orderBy('time_start', 'asc')->with('spreker')->get();
        return view('content.sessionsIndex', ['sessions' => $sessions]);
    }

    public function getEdit($id){
        $session = Sessie::where('id', $id)->with('spreker')->first();
        $speakers = Spreker::all();

        return view('content.sessionsEdit', ['session' => $session, 'speakers' => $speakers]);
    }

    public function postUpdate(Request $request){
        $session = Sessie::find($request->input('id'));

        $session->title = $request->input('title');
        $session->description = $request->input('description');
        $session->date = $request->input('date');
        $session->time_start = $request->input('time_start');
        $session->time_end = $request->input('time_end');
        $session->location = $request->input('location');

        $session->save();

        $speaker = Spreker::find($request->input('speaker'));

        $speaker->sessions()->save($session);

        return redirect()->action('SessieController@getIndex');
    }

    public function getDelete($id){
        $session = Sessie::find($id);
        $session->delete();

        return redirect()->action('SessieController@getIndex');
   }

    public function getCreate(){
        $speakers = Spreker::all();
        return view('content.sessionsCreate', ['speakers' => $speakers]);
    }

    public function postCreate(Request $request){
        $session = new Sessie([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'time_start' => $request->input('time_start'),
            'time_end' => $request->input('time_end'),
            'location' => $request->input('location')
        ]);

        $speaker = Spreker::find($request->input('speaker'));

        $speaker->sessions()->save($session);

        return redirect()->action('SessieController@getIndex');
    }
}
