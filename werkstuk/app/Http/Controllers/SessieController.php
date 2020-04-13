<?php

namespace App\Http\Controllers;

use App\Sessie;
use App\Spreker;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

class SessieController extends Controller
{
    public function getIndex(){
        $sessions = Sessie::orderBy('time_start', 'asc')->with('spreker')->paginate(4);
        return view('content.sessionsIndex', ['sessions' => $sessions]);
    }

    public function getEdit($id){
        $session = Sessie::where('id', $id)->with('spreker')->first();
        $speakers = Spreker::all();

        return view('content.sessionsEdit', ['session' => $session, 'speakers' => $speakers]);
    }

    public function postUpdate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'time_start' => 'required',
            'time_end' => 'required',
            'location' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
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

            return redirect()->action('SessieController@getIndex')->with('updated', $session->title);
        }
    }

    public function getDelete($id){
        $session = Sessie::find($id);
        $session->delete();

        return redirect()->action('SessieController@getIndex')->with('deleted', $session->title);
   }

    public function getCreate(){
        $speakers = Spreker::all();
        return view('content.sessionsCreate', ['speakers' => $speakers]);
    }

    public function postCreate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'time_start' => 'required',
            'time_end' => 'required',
            'location' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
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

            return redirect()->action('SessieController@getIndex')->with('added', $session->title);
        }
    }

    public function getTimetable(){
        $sessions = Sessie::orderBy('time_start', 'asc')->with('spreker')->get();
        return view('content.timetable', ['sessions' => $sessions]);
    }

    public function postUpdateTimetable(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'start.*' => 'required',
            'end.*' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $sessions = Sessie::orderBy('time_start', 'asc')->with('spreker')->get();
            $start = $request->input('start');
            $end = $request->input('end');
            $changed = array();
            for($i = 0; $i < count($start); $i++){
                if($sessions[$i]->time_start != $start[$i] || $sessions[$i]->time_end != $end[$i]){
                    $sessions[$i]->time_start = $start[$i];
                    $sessions[$i]->time_end = $end[$i];
                    $sessions[$i]->save();
                    $changed[$i] = $sessions[$i]->title;
                }
            }
            return redirect()->action('SessieController@getTimetable')->with('timetable', $changed);
        }
    }
}
