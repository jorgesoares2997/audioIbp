<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Audio;
 
use App\Models\User;

class AudioController extends Controller
{ 
    
    public function index() {

       

    $search = request('search');

    $user = auth()->user();
   

    if($search) {

        $equips = Audio::where([
            ['name', 'like', '%'.$search.'%']
        ])->get();

    } else {
        $equips = Audio::all();
    }        

    return view('welcome',['equips' => $equips, 'search' => $search, 'user' => $user]);

}

    
    public function about(){
        return view('about');
    }
    public function equipe(){
        return view('equipe');
    }
    public function manutencao(){
        return view('manutencao');
    }
    public function equipamentos(){   
        
        $equips = Audio::all();

        return view('equipamentos', ['equips'=>$equips]);
    }

    public function dashboard() { 
        


        $usuario = auth()->user();


        return view('dashboard', ['usuario' => $usuario]);

    }
    public function store(Request $request) {

        $audio = new Audio;

        $audio->name = $request->name;
        $audio->date = $request->date;
        $audio->description = $request->description;
        $audio->onde = $request->onde;
        $audio->condit = $request->condit;
        

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/equips'), $imageName);

            $audio->image = $imageName;

        }

        $user = auth()->user();
        $audio->user_id = $user->id;

        $audio->save();

        return redirect('/')->with('msg', 'Equipamento adicionado com sucesso!');

    }
    public function destroy($id){
        Audio::findOrFail($id)->delete();

        return redirect('dashboard')->with('msg', 'equipamento excluído com sucesso!');
    }

    public function edit($id){

        $equip = Audio::findOrFail($id);
        
        $user = auth()->user();        

        if($user->id != $equip->user->id){
            return redirect('/')->with('msg', 'Você não pode editar o equipamento ' . $equip->name . ' por não ser o criador do equipamento ');
        }

        return view('events.edit', ['equip' =>$equip]);
    }
    public function update(Request $request){
        $data = $request->all();

       
        

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/equips'), $imageName);

            $data['image'] = $imageName;

        }
        

        Audio::findOrFail($request->id)->update($data);

        
        return redirect('/')->with('msg', 'Equipamento editado com sucesso!');
    }

    public function updateProfile(Request $request){

        $data = $request->all();

        $user = auth()->user();

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/user'), $imageName);

            $user['image'] = $imageName;

        }

       

       

        User::findOrFail($user->id)->update($data);

        return redirect('dashboard')->with('msg', 'Perfil atualizado com sucesso!');
    }

    public function show($id) {

        $equip = Audio::findOrFail($id);

        $user = auth()->user();

        $hasUserJoined = false;

        $equipOwner = User::where('id', $equip->user_id)->first()->toArray();
    
        
        return view('events.show', ['equip' => $equip, 'hasUserJoined' => $hasUserJoined, 'equipOwner'=>$equipOwner]);
        
    }

}
