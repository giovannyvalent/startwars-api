<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\Validator;

class PeoplesController extends Controller
{
    public function getPeoples(){
        $peoples = People::orderBy('created_at', 'desc')->get();
        return response()->json(['data' => $peoples]);
    }

    public function peopleUnique($id){
        // $people = People::find($id);
        $people = People::where('id', $id)->with('planets')->get()->first();
        return response()->json(['data' => $peoples]);
    }

    public function createPeople(Request $request){

        $rules = array(
            'name'   => 'required|max:50',
            'gender' => 'required|max:50',
            'url'    => 'required|max:50',
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return $validator->errors();
        }

        $people = People::create([
            'name' => $request->name,
            'birth_year' => $request->birth_year,
            'eye_color' => $request->eye_color,
            'gender' => $request->gender,
            'url' => $request->url
        ]);

        return response()->json([
            'message' => 'Personagem criado com sucesso',
            'people' =>  $people
        ]);
    }

    public function updatePeople(Request $request){

        $people = People::where('id', $request->user_id)->update(array(
            'name' => $request->name,
            'birth_year' => $request->birth_year
        ));

        return response()->json([
            'message' => 'Personagem editado com sucesso'
        ]);
    }

    public function deletePeople($id){
        $people = People::find($id);
        $people->delete();
        return response()->json([
            'message' => 'Personagem deletetado!'
        ]);
    }

}
