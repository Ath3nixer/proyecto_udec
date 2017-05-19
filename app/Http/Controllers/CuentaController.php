<?php

namespace SICTIC\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cuenta = DB::table('cuentas')
            ->join('roles', 'cuentas.rol_id', '=', 'roles.id')
            ->where('roles.id','=','2')
            ->get();
        return view('admin.consultarlider', [
            'cuentas' => $cuenta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //
        $tipodoc = DB::table('cuentas')
            ->select('tipodoc')
            ->get();
        return view('admin.registrarlimon', ['cuentas' => $tipodoc]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$id = DB::table('roles')
        //    ->insertGetID([
        //        'rol' => $request->rol,
        //        'descripcion' => request->descripcion
        //    ]);

        DB::table('cuentas')
            ->insert([
                'tipocuenta' => $request->tipocuenta,
                'clasecuenta' => $request->clasecuenta,
                'rol_id' => $request->id,
                'estadocuenta' => $request->estadocuenta,
                'tipodoc' => $request->tipodoc,
                'numdoc' => $request->numdoc,
                'email' => $request->email,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'direcion' => $request->direccion,
                'sexo' => $request->sexo,
                'fechanac' => $request->fechanac,
                'celular' => $request->celular,
                'password' => $request->password,
                ]);
            return redirect('cuentas');
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
