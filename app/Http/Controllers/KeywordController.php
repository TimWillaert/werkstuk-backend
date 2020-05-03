<?php

namespace App\Http\Controllers;

use App\Keyword;
use App\Spreker;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

class KeywordController extends Controller
{
    public function getIndex(){
        $this->authorize('access-keywords');
        $keywords = Keyword::all();
        return view('content.keywordsIndex', ['keywords' => $keywords]);
    }

    public function getCreate(){
        $this->authorize('access-keywords');
        $speakers = Spreker::all();
        return view('content.keywordsCreate', ['speakers' => $speakers]);
    }

    public function postUpdate(Request $request, Factory $validator){
        $this->authorize('access-keywords');
        $validation = $validator->make($request->all(), [
            'name' => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $keyword = Keyword::find($request->input('id'));
            $keyword->name = $request->input('name');
            $keyword->save();
            return redirect()->action('KeywordController@getIndex')->with('updated', $keyword->name);
        }
    }

    public function getDelete($id){
        $this->authorize('access-keywords');
        $keyword = Keyword::find($id);
        $keyword->sprekers()->detach();
        $keyword->delete();
        return redirect()->action('KeywordController@getIndex')->with('deleted', $keyword->name);
    }

    public function postCreate(Request $request, Factory $validator){
        $this->authorize('access-keywords');
        $validation = $validator->make($request->all(), [
            'name' => 'required|unique:App\Keyword,name',
            'speakers.*' => 'distinct'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $keyword = new Keyword([
                'name' => $request->input('name')
            ]);
            $keyword->save();
            if(in_array(null, $request->input('speakers'))){
                if(count($request->input('speakers')) > 1){
                    $keyword->sprekers()->sync(array_filter($request->input('speakers'), 'strlen'));
                }
            } else{
                $keyword->sprekers()->sync($request->input('speakers'));
            }
            return redirect()->action('KeywordController@getIndex')->with('created', $keyword->name);
        }
    }
}
