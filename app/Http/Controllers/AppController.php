<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affiche;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function post(){
        return view('poster');
    }
    public function dep(){
        return view('departement');
    }
    public function chefdep(){
        return view('chefdep');
    }
    public function dashboard(){
        return view('landing');
    }
    public function addpost(Request $request){

        $affiche = new affiche();
        $affiche->title=request('title');
        $affiche->description=request('description');
        $affiche->date=date('Y-m-d H:i:s');
        $affiche->save();
        $data = affiche::all();
        return redirect()->route('show')->with(['affiches'=>$data]);
    }
    public function show(){
        $data = affiche::all();
        return view('show',['affiches'=>$data]);
    }
    public function details($id){
        $data = affiche::find($id);
        return view('details',[
            'affiche'=>$data,
            'id'=>$id
        ]);
    }
    public function edit($id){
        $data = affiche::find($id);
        return view('edit',[
            'affiche'=>$data,
        ]);
    }
    public function editpost($id){

        $affiche = affiche::find($id);
        $affiche->title=request('title');
        $affiche->description=request('description');
        $affiche->date=date('Y-m-d H:i:s');
        $affiche->save();
        return view('details',[
            'affiche'=>$affiche,
            'id'=>$id
    ]);
    }
    public function deletepost($id){

        $affiche = affiche::find($id);
        $affiche->delete();
        $data=affiche::all();
        return redirect()->route('show')->with(['affiches'=>$data]);
    }
}
