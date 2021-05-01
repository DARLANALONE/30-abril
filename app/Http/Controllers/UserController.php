<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
   public function index(){

       $users = User::orderBy('id','desc')->paginate(7);
       return view('user.index',compact('users'));
   }
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return redirect('users')->with('status','Usuario Creado Correctamente');
    }
        //vista retorna un thml
        public function show($id){

       $user = User::find($id);

            return view('user.show', compact('user'));
        }

        public function destroy($id)
        {
            //DELETE form users WHERE id= ?
            $user = User::find($id)->delete();
            return redirect('users')->with('status','Registro Eliminado');
        }

        public function edit($id){

            $user = User::find($id);
            return view('user.edit' ,compact('user'));
        }
        // data = data actualizadaa  (nombre, apellido, cotrreo)
        public  function update(Request $request, $id){

            $user = User::find($id)->update($request->all());
            return redirect('users')->with('status','Registro Actualizado Correctamente');

        }
}
