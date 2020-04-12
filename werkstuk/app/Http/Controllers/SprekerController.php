<?php

namespace App\Http\Controllers;

use App\Image;
use App\Keyword;
use App\Spreker;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use PhpParser\Node\Stmt\Foreach_;

class SprekerController extends Controller
{

    public function getIndex(){
        $speakers = Spreker::orderBy('name', 'asc')->with('sessions')->paginate(3);
        return view('content.speakersIndex', ['speakers' => $speakers]);
    }

    public function getEdit($id){
        $speaker = Spreker::where('id', $id)->with('images')->first();
        $keywords = Keyword::all();

        return view('content.speakersEdit', ['speaker' => $speaker, 'keywords' => $keywords]);
    }

    public function postUpdate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'website' => 'required|url'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $speaker = Spreker::find($request->input('id'));

            $speaker->name = $request->input('name');
            $speaker->description = $request->input('description');
            $speaker->website = $request->input('website');

            $img1 = new Image([
                'name' => $speaker->images[0]->name,
                'src' => $speaker->images[0]->src
            ]);
            $img2 = new Image([
                'name' => $speaker->images[1]->name,
                'src' => $speaker->images[1]->src
            ]);
            $img3 = new Image([
                'name' => $speaker->images[2]->name,
                'src' => $speaker->images[2]->src
            ]);

            if($request->file('profilepic')){
                if($speaker->profilepic != base64_encode(file_get_contents($request->file('profilepic')))){
                    $speaker->profilepicname = $request->file('profilepic')->getClientOriginalName();
                    $speaker->profilepic = base64_encode(file_get_contents($request->file('profilepic')));
                }
            }

            if($request->file('image1')){
                if($img1->src != base64_encode(file_get_contents($request->file('image1')))){
                    $img1 = new Image([
                        'name' => $request->file('image1')->getClientOriginalName(),
                        'src' => base64_encode(file_get_contents($request->file('image1')))
                    ]);
                }
            }

            if($request->file('image2')){
                if($img2->src != base64_encode(file_get_contents($request->file('image2')))){
                    $img2 = new Image([
                        'name' => $request->file('image2')->getClientOriginalName(),
                        'src' => base64_encode(file_get_contents($request->file('image2')))
                    ]);
                }
            }
            if($request->file('image3')){
                if($img3->src != base64_encode(file_get_contents($request->file('image3')))){
                    $img3 = new Image([
                        'name' => $request->file('image3')->getClientOriginalName(),
                        'src' => base64_encode(file_get_contents($request->file('image3')))
                    ]);
                }
            }

            $speaker->images()->delete();

            $speaker->images()->save($img1);
            $speaker->images()->save($img2);
            $speaker->images()->save($img3);

            $speaker->save();

            $speaker->keywords()->sync($request->input('keywords') === null ? null : $request->input('keywords'));

            return redirect()->action('SprekerController@getIndex')->with('updated', $speaker->name);
        }
    }

    public function getDelete($id){
         $speaker = Spreker::find($id);
         $speaker->images()->delete();
         $speaker->keywords()->detach();
         $speaker->delete();

         return redirect()->action('SprekerController@getIndex')->with('deleted', $speaker->name);
    }

    public function getCreate(){
        $keywords = Keyword::all();
        return view('content.speakersCreate', ['keywords' => $keywords]);
    }

    public function postCreate(Request $request, Factory $validator){
        $validation = $validator->make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image1' => 'required|file|mimes:jpg,jpeg,png',
            'image2' => 'required|file|mimes:jpg,jpeg,png',
            'image3' => 'required|file|mimes:jpg,jpeg,png',
            'website' => 'required|url'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        } else{
            $speaker = new Spreker([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'website' => $request->input('website'),
                'profilepicname' => $request->file('profilepic')->getClientOriginalName(),
                'profilepic' => base64_encode(file_get_contents($request->file('profilepic')))
            ]);

            $speaker->save();

            $img = new Image([
                'name' => $request->file('image1')->getClientOriginalName(),
                'src' => base64_encode(file_get_contents($request->file('image1')))
            ]);
            $speaker->images()->save($img);

            $img = new Image([
                'name' => $request->file('image2')->getClientOriginalName(),
                'src' => base64_encode(file_get_contents($request->file('image2')))
            ]);
            $speaker->images()->save($img);

            $img = new Image([
                'name' => $request->file('image3')->getClientOriginalName(),
                'src' => base64_encode(file_get_contents($request->file('image3')))
            ]);
            $speaker->images()->save($img);

            $speaker->keywords()->sync($request->input('keywords') === null ? '' : $request->input('keywords'));

            return redirect()->action('SprekerController@getIndex')->with('added', $speaker->name);
        }
    }

}
