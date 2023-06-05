<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class TesteController extends Controller
{
    public function funcaoTeste(){

        $search = request('search');

        if($search){
            
            $clients = Client::where([
                ['nome','like','%'.$search.'%']
            ])->get();

        }else{
            $clients = Client::all();
        }
        
        return view("teste", ['clients' => $clients , 'search' => $search]);
    }

    public function fCliente(){
        $nome = "Pedro";
        $idade = 19;
        $arr = [1,2,3,4,5];
        $nomes = ["Carlos","João","Maria"];

        return view('cliente' , ['nome' => $nome , 'idade' => $idade , 'arr' =>$arr , 'nomes' => $nomes]);
    }

    public function tabelaPessoas(){
        $pessoas = [['nome'=>"Paulo",'idade'=>'29'],['nome'=>"Claudio",'idade'=>'18'],['nome'=>"André",'idade'=>'23'],['nome'=>"Maria",'idade'=>'18']];

        return view("tabela", ['pessoas'=>$pessoas]);
    }

    public function store(Request $request){

        $client = new Client;

        $client->date = $request->date; 
        $client->nome = $request->nome;
        $client->idade = $request->idade;
        $client->habilidades = $request->habilidades;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->file('image');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $requestImage->move(public_path('img/clients'), $imageName);
            $client->image = $imageName;
        }

        $client->save();

        return redirect("/teste")->with('msg','Usuario Cadastrado');
    }
    
    public function show($id){

        $client = Client::findorfail($id);

        return view('/show',['client'=>$client]);

    }

    public function destroy($id){

        Client::findorfail($id)->delete();

        return redirect("/teste")->with('msg','Usuario Deletado');
    }

    public function edit($id){

        $client = Client::findorfail($id);

        return view('/edit' , ['client' => $client]);
    }

    public function update(Request $request){

        Client::findorfail($request->id)->update($request->all());

        return redirect("/teste")->with('msg','Usuario Editado');

    }
}
