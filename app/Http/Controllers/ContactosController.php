<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    // $contactos = Contacto::paginate(3);
     // $contactos = Contacto::orderBy('id','desc')->paginate(6);
        $contactos = Contacto::all();
        return view('contactos.index',compact('contactos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $contacto = Contacto::create([
            "nombre"=> $request-> nombre,
            "telefono"=> $request-> telefono,
            "fechaNacimiento"=> $request-> fechaNacimiento,
            'direccion' => $request-> direccion,
            'correoElectronico' => $request-> correoElectronico,
        ]);
        return redirect('contactos');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contacto = Contacto::find($id);
        return view('contactos.show',compact('contacto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacto =Contacto::find($id);
        return view('contactos.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $contacto = Contacto::find($id)->update([
    "nombre" => $request->nombre,
    "telefono" => $request->telefono,
    "fechanacimiento" => $request->fechaNacimiento,
    "direccion" => $request->direccion,
    "correoElectronico" => $request->correoElectronico,
            ]);
    
            return redirect()->route('contactos.show',$id);
          
            }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contacto = Contacto::find($id)->delete();
        return redirect()->route('contactos.index');
    }
}
