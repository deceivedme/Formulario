<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

use App\Mail\FormurlarioMail;
use Illuminate\Support\Facades\Mail;


class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'required|email',
        'numero' => 'required'
        ];
        $mensajeDeError = [
        'required' => 'Ingreso de datos erróneo'
        ];

        $paraenviar = $request->get('correo');
        
        $mensaje = new FormurlarioMail($request->all());        
        Mail::to($paraenviar)->send($mensaje);

        
        $this->validate($request, $reglas, $mensajeDeError);    

        $formulario= new Formulario();
        
        $formulario->nombre   = $request->get('nombre');
        $formulario->apellido = $request->get('apellido');
        $formulario->correo   = $request->get('correo');
        $formulario->numero   = $request->get('numero');
        
        $formulario->save();     
        

       
        
        return "Mensaje enviado";    


        // return redirect('/');

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
    }
}
