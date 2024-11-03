<?php

namespace App\Http\Controllers;
use App\Models\personnesModel;
use App\http\Requests\createpersonneRequest;
use App\http\Requests\updateRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class personneController extends Controller
{
   public  function index(){
        $data=personnesModel::select('*')->orderBy('id','ASC')->paginate(10);
        return view('index',['data'=>$data]);
    }
    public function create(){
        return view('create');

    }
    public function store(createpersonneRequest $request){
        personnesModel::create([
            "name" => $request->pr_name,
            "prenom" => $request->pr_prenom,
            "email" => $request->pr_email,
            "password" =>Hash::make($request->pr_password),
            "active" => $request->pr_active,
        ]);
        return redirect()->route('show')->with(["success"=>"personne ajoute avec succes"]);
    }
    public function edit ($id){
        $data=personnesModel::select("*")->find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(updateRequest $request,$id){
        personnesModel::where('id',$id)->update([
            "name" => $request->pr_name,
            "prenom" => $request->pr_prenom,
            "email" => $request->pr_email,
            "password" =>Hash::make($request->pr_password),
            "active" => $request->pr_active,
        ]);
        return redirect()->route('show')->with(["success"=>"personne modifie avec succes"]);
    }
    public function destroy($id){
        personnesModel::where('id',$id)->delete();
        return redirect()->route('show')->with(["success"=>"personne supprime avec succes"]);
    }
}
