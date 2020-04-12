<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

class PartnerController extends Controller
{
    public function getIndex(){
        $partners = Partner::orderBy('name', 'asc')->get();
        return view('content.partnersIndex', ['partners' => $partners]);
    }

    public function getEdit($id){
        $partner = Partner::find($id);
        return view('content.partnersEdit', ['partner' => $partner]);
    }

    public function postUpdate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'website' => 'required|url'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $partner = Partner::find($request->input('id'));

            $partner->name = $request->input('name');
            $partner->type = $request->input('type');
            $partner->level = $request->input('level');
            $partner->website = $request->input('website');

            if($request->file('logo')){
                if($partner->img != base64_encode(file_get_contents($request->file('logo')))){
                    $partner->imgname = $request->file('logo')->getClientOriginalName();
                    $partner->img = base64_encode(file_get_contents($request->file('logo')));
                }
            }

            $partner->save();

            return redirect()->action('PartnerController@getIndex')->with('updated', $partner->name);
        }
    }

    public function getDelete($id){
        $partner = Partner::find($id);
        $partner->delete();

        return redirect()->action('PartnerController@getIndex')->with('deleted', $partner->name);
   }

    public function getCreate(){
        return view('content.partnersCreate');
    }

    public function postCreate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'logo' => 'required|file|mimes:jpg,jpeg,png',
            'website' => 'required|url'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $partner = new Partner([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'level' => $request->input('level'),
                'website' => $request->input('website'),
                'imgname' => $request->file('logo')->getClientOriginalName(),
                'img' => base64_encode(file_get_contents($request->file('logo')))
            ]);

            $partner->save();

            return redirect()->action('PartnerController@getIndex')->with('added', $partner->name);
        }
    }
}
