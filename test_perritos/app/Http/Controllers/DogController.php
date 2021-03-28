<?php

namespace App\Http\Controllers;
use App\Models\DogModel;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        return view('perritos.index',['perros'=>DogModel::all()]);
    }

    public function create()
    {
        return view('perritos.create')->with('mensaje','no');
    }
    public function store(Request $request)
    {
        $perro_exist = $request->nombre;
        $perro_exist = DogModel::select('id')->where('nombre',$perro_exist)->count();
        if($perro_exist == 0)
        {
            $perro = $request->except('_token');
            DogModel::insert($perro);
            return view('perritos.index',['perros'=>DogModel::all()]);
        }
        else
        {
            return view('perritos.create')->with('mensaje','Un perro ya tiene este nombre');
        }
    }
    public function update(Request $request, $id)
    {
        $perro_exist = $request->nombre;
        $perro_exist = DogModel::select('id')->where('nombre',$perro_exist)
        ->where('id','!=',$id)
        ->count();
        if($perro_exist == 0)
        {
            $perro = $request->except(['_token','_method']);
            DogModel::where('id',(int)$id)->update($perro);
            return view('perritos.index',['perros'=>DogModel::all()]);
        }
        else
        {
            return view('perritos.edit',['perro'=>DogModel::FindOrFail($id)])->with('mensaje','Un perro ya tiene este nombre');
        }
    }

    public function edit($id)
    {
        return view('perritos.edit',['perro'=>DogModel::FindOrFail($id)])->with('mensaje','no');
    }

    public function destroy($id)
    {
        DogModel::destroy($id);
        return redirect('/perritos');
    }

    public function adoptar($id)
    {
        DogModel::where('id',(int)$id)->update(['adoptado'=> true]);
        $perro =DogModel::select('nombre')->where('id',$id)->get();
        return view('perritos.adoptar')->with("perro",$perro);
    }
}
