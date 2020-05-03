<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

class TicketController extends Controller
{
    public function getIndex(){
        $this->authorize('access-tickets');
        $tickets = Ticket::all();
        return view('content.ticketsIndex', ['tickets' => $tickets]);
    }

    public function getEdit($id){
        $this->authorize('access-tickets');
        $ticket = Ticket::find($id);
        return view('content.ticketsEdit', ['ticket' => $ticket]);
    }

    public function postUpdate(Request $request, Factory $validator){
        $this->authorize('access-tickets');
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'amount' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $ticket = Ticket::find($request->input('id'));
            $ticket->name = $request->input('name');
            $ticket->description = $request->input('description');
            $ticket->price = $request->input('price');
            $ticket->amount = $request->input('amount');
            $ticket->open = $request->input('open');

            $ticket->save();

            return redirect()->action('TicketController@getIndex')->with('updated', $ticket->name);
        }
    }

    public function getDelete($id){
        $this->authorize('access-tickets');
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->action('TicketController@getIndex')->with('deleted', $ticket->name);
    }

    public function getCreate(){
        $this->authorize('access-tickets');
        return view('content.ticketsCreate');
    }

    public function postCreate(Request $request, Factory $validator){
        $this->authorize('access-tickets');
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'amount' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $ticket = new Ticket([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'amount' => $request->input('amount'),
                'open' => $request->input('open')
            ]);
            $ticket->save();

            return redirect()->action('TicketController@getIndex')->with('added', $ticket->name);
        }
    }
}
